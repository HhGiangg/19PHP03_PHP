<style type="text/css">
  .error {
    color: red;
  }
</style>	



<?php 
$name = $email = $country = $gender = "";
$nameErr = $emailErr = $countryErr = $genderErr ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['name'])) {
		$nameErr = 'Please input your name';
	} else{
		$name = test_input($_POST['name']);
	}

	if (empty($_POST['email'])) {
		$emailErr = 'Please input your email';
	} else{
		$email = test_input($_POST['email']);
	}

	if (empty($_POST['country'])) {
		$countryErr = 'Please input your address';
	} else{
		$country = test_input($_POST['country']);
	}

	if (empty($_POST['gender'])) {
		$genderErr = 'Gender is required';
	} else{
		$gender = test_input($_POST['gender']);
	}	
}	
	
	
function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

 ?>
 <h1>Mời bạn điền thông tin </h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	Name:
	<input type="text" name="name" value="<?php echo $name ?>">
	<span class="error"><?php echo $nameErr ?></span>
	<br><br>
	Email:
	<input type="text" name="email" value="<?php echo $email ?>">
	<span class="error"><?php echo $emailErr ?></span>
	<br><br>
	Address:
	<input type="text" name="country" value="<?php echo $country ?>">
	<span class="error"><?php echo $countryErr ?></span>
	<br><br>
    Gender:
    <input type="radio" name="gender" value="female">Nữ
    <input type="radio" name="gender" value="male">Nam
    <input type="radio" name="gender" value="other">Khác
    <span class="error"><?php echo $genderErr ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php 
	
	echo "<h2> Thông tin bạn nhập là:</h2>";
	echo $name.'<br>';
	echo $email.'<br>';
	echo $country.'<br>';
	echo $gender.'<br>';

 ?>

