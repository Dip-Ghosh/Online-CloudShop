<?php
	include('connect.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$price=$_POST['price'];
 
	mysqli_query($connection,"update `products` set name='$name', price='$price' where id='$id'");
	header('location:addproduct.php');
?>