<!DOCTYPE html>
<html>
<head>
    <title>Register form</title>
</head>
<body>
<?php include 'connect.php';?>
<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $description = $_POST['description'];
    $image = 'default.png';
    if ($_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
    }

    $sqlSave = "INSERT INTO news (name , description, image) VALUES('$username', '$description', '$image')";
    if (mysqli_query($connect, $sqlSave) === TRUE) {
        header('Location: list.php');
    }
}
?>
<h1>Form Tin tuc</h1>
<form action="#" method="POST" enctype="multipart/form-data">
    <p>
        <input type="text" name="username" placeholder="name">
    </p>
    <p>
        <textarea name="description" placeholder="description" rows="8" cols="40"></textarea>
    </p>
    <p>
        <input type="file" name="image">
    </p>
    <p>
        <input type="submit" name="register" value="Register">
    </p>
</form>
</body>
</html>