<!DOCTYPE html>
<html>
<head>
	<title>List User</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 800px;
		}
		table, tr, th, td {
			border: 1px solid black;
		}
		img {
			width: 150px;
		}
	</style>
</head>
<body>




<h1>List User</h1>
<!-- link regis -->
<a href="register.php"> Register</a>
<form action="#" method="POST">
	<p>
		Search
		<input type="text" name="keyword" placeholder=" Please input your key">
		<input type="submit" name="search" value="Search">
	</p>
</form>
<?php include 'data.php';?>
	<?php 
		$sqlSelect = "SELECT * FROM users";
		$result = mysqli_query($connect, $sqlSelect);
	?>
<table>
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		<th>Avater</th>
		<th>Action</th>
	</tr>
<?php 
	while ($row = $result->fetch_assoc()) {
		$id = $row['id']; 	
		echo "<tr>";
		echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td><img src='uploads/".$row['avatar']."'></td>";
			echo "<td><a href='delete.php?id=".$id."''>Delete</a></td>";
			echo "<td><a href='edit.php?id=".$id."''>edit</a></td>";
			echo "</tr>";
		}

 ?>
</table>
</body>
</html>