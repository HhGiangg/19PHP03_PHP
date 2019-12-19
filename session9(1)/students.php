<!DOCTYPE html>
<html>
<head>
	<title>Sinh Vien</title>
</head>
<body>
<?php 
	include 'connect.php';
	// Get Gender
	$sqlGen = "SELECT * FROM sinhvien";
	$gender = mysqli_query($connect, $sqlGen);

	// Get School
	$sqlSchool = "SELECT * FROM sinhvien";
	$school = mysqli_query($connect, $sqlSchool);



	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$school = $_POST['school'];

	// luu 
	$sqlSave = "INSERT INTO sinhvien (id, name, gender, school) VALUES ($id, '$name','$gen' '$school')";
	
	if (mysqli_query($connect, $sqlinsert) === TRUE) {
				header('Location: list_students.php');
			}
	}
 ?>


<h2>Add Students</h2>
<form action="#" method="POST" enctype="multipart/form-data">
	<p>Name
		<input type="text" name="name">
	</p>
	<p>Gender
		<select name="gender">
			<?php 
				while ($row = $result->fetch_assoc()) {
							echo "<option value='".$row['id']."'>".$row['gender']."</option>";
						} 
			?>
		</select>
	</p>
		
	<p>School
		<select name="school">
			<?php 
				while ($row = $result->fetch_assoc()) {
					echo "<option value='".$row['id']."'>".$row['school']."</option>";
				}
			 ?>
		</select>
	</p>
	<p>School
		<input type="text" name="school">	
	</p>
	<p>
		<input type="submit" name="submit">
	</p>



</form>


</body>
</html>