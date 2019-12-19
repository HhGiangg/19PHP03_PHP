<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include 'connect.php';
		// get gender
		$sqlGen = "SELECT * FROM sinhvien";
		$gender = mysqli_query($connect, $sqlGen);

		$sqlSelect = "SELECT student.id,student.name, student.gender, student.school
			 FROM sinhvien
			INNER JOIN sinhvien ON student.student_id = student.id";

		$keyword = '';
	if (isset($_POST['search'])) {
		$keyword = $_POST['keyword'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		// search keyword
		if ($keyword != '') {
			$student_id = $_POST['student_id'];
			$sqlSelect = "SELECT student.id, student.name, student.gender, student.school
			 FROM sinhvien
			INNER JOIN sinhvien	 ON  sinhvien.students_id = sinhvien.id WHERE (title LIKE '%$keyword%' OR school LIKE '%$keyword%') AND student_id = $student_id";
		}
	}
	$result = mysqli_query($connect, $sqlSelect);
	 ?>

<h2>List Students</h2>
<form action="#" method="POST" enctype="multipart/form-data">
	<p>
		Keywords
		<input type="text" name="keyword" value="<?php echo $keyword;?>">
	</p>
	<p>Gender
		<select name="students_id">
			<?php 
				while ($row = $gender->fetch_assoc()) {
							echo "<option value='".$row['id']."'>".$row['gender']."</option>";
						} ?>
			
		</select>
	</p>
	<p>
		<input type="submit" name="search">
	</p>
</form>
<table>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Gender</th>
			<th>School</th>
		</tr>
		<?php 
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['school']."</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>