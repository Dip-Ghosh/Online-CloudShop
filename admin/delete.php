<?php
	$id=$_GET['id'];
	include('connect.php');
	mysqli_query($connection,"delete from `products` where id='$id'");
	header('location:addproduct.php');
?>