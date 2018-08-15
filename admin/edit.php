<?php
	include('connect.php');
	$id=$_GET['id'];
	$query=mysqli_query($connection,"select * from `products` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Page</title>
<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	<h2 style="color: white">Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label style="color: white;">Product Name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name"> <br> <br> 
		<label style="color: white; margin-top: 10%;">Product Price:</label><input type="text" value="<?php echo $row['price']; ?>" name="price"> <br> <br>
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" name="submit"> <br> <br>
		<a href="addproduct.php">Back</a>
	</form>
</body>
</html>