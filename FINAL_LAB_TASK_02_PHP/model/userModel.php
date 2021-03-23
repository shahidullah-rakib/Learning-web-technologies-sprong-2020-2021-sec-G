<?php
	
require_once('db.php');


function insertproduct($product){
	$conn = getConnection();
	$sql = "insert into products values('', '{$product['productName']}', '{$product['buyingPrice']}', '{$product['sellingPrice']}', '{$product['display']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getproductbyId($id){
	
	$conn = getConnection();
	$sql = "select * from products where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllproduct(){

	$conn = getConnection();
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	$products = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
	}
	return $products;
}

function updateproduct($product){
	$conn = getConnection();
	$sql = "update products set productName='{$product['productName']}', buyingPrice='{$product['buyingPrice']}', sellingPrice='{$product['sellingPrice']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function deleteproduct($id){
	$conn = getConnection();
	$sql = "delete from products where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getproductByName($productName){
	$conn = getConnection();
	$sql = "select * from products where productName='{$productName}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>
