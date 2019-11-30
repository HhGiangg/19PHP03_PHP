<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/icon_24h.ico">
	<meta name="keywords" content="PHP, mysql, SDC">
	<meta name="description" content="This is register form">
</head>
<body>
<!-- Code PHP -->
	<?php 
	// Khởi tạo các giá trị ban đầu
	$name = '';
	$descrip = '';
	$price = '';
	$date_begi = '';
	$date_end = '';
	$img = '';
	$type = '';
	$checkValidate = true;
	

	// Khởi tạo các biến lỗi
	$nameErr = $descripErr = $priceErr = $date_begiErr = $date_endErr = $imgErr = $typeErr = '';

	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$descrip = $_POST['descrip'];
		$date_begi = $_POST['date_begi'];
		$date_end = $_POST['date_end'];
		$type = $_POST['type'];
		
		// Xu ly upload avatar
		$avatar = $_FILES['avatar'];
		//var_dump($avatar);exit();
		// khoi tao anh mac dinh
		$avatarName = 'default.png';
		if ($avatar['error'] == 0) {
			// Gan ten cho avatar upload len
			$avatarName = $avatar['name'];
			// Upload file vao thu muc
			move_uploaded_file($avatar['tmp_name'], 'uploads/'.$avatarName);
		}
		// Ket thuc xu ly upload avatar
		// validate loi de trong (validate co ban)
		if ($name == '') {
			$checkValidate = false;
			$nameErr = ' please input full name';
		}
		if ($descrip == '') {
			$checkValidate = false;
			$descripErr = ' please input Description';
		}
		if ($price == '') {
			$checkValidate = false;
			$priceErr = ' please input price';
		}
		if ($date_begi == '') {
			$checkValidate = false;
			$date_begi = ' please input date';
		}
		if ($date_end == '') {
			$checkValidate = false;
			$date_endErr = ' please input date';
		}
		if ($type == '') {
			$checkValidate = false;
			$typeErr = ' please choose';
		}
	
	//In thong tin san pham ra
		if ($checkValidate) {
			echo "<h2>Thong tin san pham</h2>";
			echo " $name <br>";
			echo "$descrip <br>";
			echo "$price <br>";
			echo "$date_begi <br>";
			echo "$date_end <br>";
			echo "$type <br>";
			echo "<img src='uploads/$avatarName'>";
		}
	}
	
	// ket thuc ket submit form




	 ?>



<!-- Code HTML -->
	<h2>Product</h2>
	<div class="product-form">
		<div class="form-control">
		<form method="POST" action="#" name="product-form" id="Product"enctype = "multipart/form-data">
			<div class="label">Product's Name:</div>
			<div class="input">
				<input type="text" name="name">
				<span class="error"><?php echo $nameErr ?></span>
			</div>
	</div>	
	
		<div class="form-control">
			<div class="label">Description:</div>
			<div class="input">
				<input type="textarea" name="descrip">
				<span class="error"><?php echo $descripErr ?></span>
			</div>
		</div>	

		<div class="form-control">
			<div class="label">Price:</div>
			<div class="input">
				<input type="text" name="price">
				<span class="error"><?php echo $priceErr ?></span>
			</div>
		</div>	

		<div class="form-control">
			<div class="label">Date of manufacture</div>
			<div class="input">
				<input type="date" name="date_begi">
				<span class="error"><?php echo $date_begiErr ?></span>
				<br><br>
			</div>
		</div>	

		<div class="form-control">
			<div class="label">Expiration date</div>
			<div class="input">
				<input type="date" name="date_end">
				<span class="error"><?php echo $date_endErr ?></span>
				<br><br>
			</div>
		</div>	

		<div class="form-control">
			<div class="label">Type product</div>
			<div class="input">
				<select name="type">
					<option value=""> Choose</option>
					<option value="food">Food</option>
					<option value="drink">Drink</option>
				</select>
				<span class="error"><?php echo $typeErr ?></span>
				<br><br>
			</div>
		</div>

		<div class="form-control">
				<div class="label">Avatar</div>
				<div class="input">
					<input type="file" name="avatar" id="avatar">
				</div>
			</div>	

		<div class="form-control">
				<div class="input">
					<input type="submit" name="register" value="Reigster">
				</div>
			</div>

		</form>
	</div>

	


</body>
</html>