<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['save'])){

		$productName 	= $_POST['productName'];
		$buyingPrice 	= $_POST['buyingPrice'];
		$sellingPrice 	= $_POST['sellingPrice'];
		$display 		= $_POST['display'];

		if($productName == "" || $buyingPrice == "" || $sellingPrice == ""){
			echo "null value found...";
		}else{
			if($productName != ""){

				$product = [	
							'productName'	=> $productName, 
							'buyingPrice'	=> $buyingPrice, 
							'sellingPrice'		=>$sellingPrice, 
							'display'		=>'display'
						];
				
				$status = insertproduct($product);				

				if($status){
					header('location: ../view/create.php');
				}else{
					echo "error..try again";
				}

			}else{
				echo "Product is empty";
			}
		}
	}


?>
