<?php include 'data.php';?>
<?php 
	$id = $_GET['id'];
	$sqlDelete = "DELETE FROM users WHERE id = $id";
	if (mysqli_query($connect, $sqlDelete) === TRUE) {
		header('Location: list.php');
	}
?>