<?php 
    require_once('../model/userModel.php');
    session_start();
    if(isset($_POST['submit'])){

        $name=$_POST['productName']; 
        $bprice=$_POST['buyingPrice'];
        $sprice=$_POST['sellingPrice'];

        $id=$_SESSION['edit_id'];

        $product = [	
            'productName'	=> $productName, 
            'buyingPrice'=> $buyingPrice, 
            'sellingPrice'=>$sellingPrice, 
            'id' => $id
        ];
        updateProduct($product);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/display.php');
        }else{
            
        }
       
    }

?>
