<!DOCTYPE html>
<html>
<head>
<title>ADD and VIEW Products</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<!-- jQuery library -->
</head>
<body>
	<div class="product">
		<form method="POST" action="add.php">
			<label style="color: white;">Product Name:</label><input type="text" name="productname"> <br>
			<label style="color: white;">Product Price:</label>&nbsp<input type="text" name="productprice"> <br>
			&nbsp &nbsp<input type="submit" name="add" style="color: black; margin-top: 2%; margin-left: 10%;">
			<button><a href="dashboard.php">Dashboard</a></button>
		</form>
	</div>
	<br>
	<button onclick="myFunction()" style="margin-left: 40%; margin-top: 10%;">Click Here To See The Products</button>
	<div id="myDIV">
		<table border="1" style="margin-left: 40%;">
			<thead>
				<th style="color: white">Product name</th>
				<th style="color: white">Product Price</th>
				<th style="color: white">Action</th>
			</thead>
			<tbody>
				<?php
					include('connect.php');
					$query=mysqli_query($connection,"select * from `products`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td style="color: white;"><?php echo $row['name']; ?></td>
							<td style="color: white;"><?php echo $row['price']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>" style="color: white;">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>" style="color: white">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
</html>