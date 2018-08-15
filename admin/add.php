<?php
	include('connect.php');
 
	$productname=$_POST['productname'];
	$productprice=$_POST['productprice'];
 
	mysqli_query($connection,"insert into `products` (name,price) values ('$productname','$productprice')");
	header('location:addproduct.php');
 
?>