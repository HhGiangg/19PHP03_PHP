  
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<?php 
		// connect php vs mysql
		$server = "localhost";
		$username = "root";
		$password = ""; 
		$database = "ex1";
		// ket noi
		$connect = mysqli_connect($server, $username, $password, $database);
		// Check connection
		if (mysqli_connect_errno())
	  {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
		if (isset($_POST['register'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			// cau lenh chen user vao db
			$sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
			
			// thuc thi cau lenh sql
			mysqli_query($connect, $sql);
		}
	?>
	<h1>Register form</h1>
	<form action="#" method="POST">
		<p>
			Username <input type="text" name="username">
		</p>
		<p>
			Password <input type="password" name="password">
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>