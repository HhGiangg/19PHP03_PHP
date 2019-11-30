<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	// ket noi database
		$server = "localhost";
		$username = "root";
		$password = ""; 
		$database = "pr";
		// ket noi
		$connect = mysqli_connect($server, $username, $password, $database);
		// Check connection
		if (mysqli_connect_errno())
	  {
	  	echo "Failed to connect to MySQL: " .mysqli_connect_error();
	  }
		if (isset($_POST['register'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			// cau lenh chen user vao db
			$sql = "INSERT INTO users(name, price) VALUES ('$name', '$price')";
			
			// thuc thi cau lenh sql
			mysqli_query($connect, $sql);
		}

	// // tao bien loi
	// $errName = $errPrice = '';
	// // tao bien mac dinh
	// $name = $price = $avatar = '';
	// // valide 
	// if (empty($_POST['name'])) {
	// 	$name = $_POST['name'];
	// }else{
	// 	$errName = 'Please input product name';
	// }
	// if (empty($_POST['price'])) {
	// 	$price = $_POST['price'];
	// }else{
	// 	$errPrice = 'Please input price product';
	// }
	// // file anh
	// $avatarName = 'default.png';
	// // xu ly uploade anh
	// $avatar = $_FILES['avatar'];
	// if ($avatar['error' == 0]) {
	// 	// gan ten cho anh up len
	// 	$avatarName = $avatar['name'];
	// 	// Up file vao thu muc
	// 	move_uploaded_file($avatar['tmp_name'], 'uploads/'.$avatarName);
	// }


	



	 ?>





<div class="form">
	<h2>Create Product:</h2>
	<form action="" method="POST" >
		<p>Prodcut Name:</p>
		<input type="text" name="name">
		<p>Product Price:</p>
		<input type="text" name="price">
		<!-- <p>Image Product</p>
		<input type="file" name="avatar"> -->
		<p>Submit:</p>
		<input type="submit" name="submit" value="Submit">
	</form>
</div>


</body>
</html>









