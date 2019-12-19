<!DOCTYPE html>
<html>
<head>
    <title>Add product</title>
</head>
<body>
<?php
include 'connect.php';
if (isset($_POST['add_product'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = 'default.png';
    $created = date('Y-m-d');
    if ($_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
    }

    $sqlSave = "INSERT INTO products (title, description, image, created) VALUES('$title', '$description', '$image', '$created')";
    if (mysqli_query($connect, $sqlSave) === TRUE) {
        header('Location: list_product.php');
    }
}
?>
<h1>Add product</h1>
<form action="#" method="POST" enctype="multipart/form-data">
    <p>Title
        <input type="text" name="title">
    </p>
    <p>Description
        <textarea name="description" rows="8" cols="40"></textarea>
    </p>
    <p>Image
        <input type="file" name="image">
    </p>
    <p>
        <input type="submit" name="add_product">
    </p>
</form>
</body>
</html>




    