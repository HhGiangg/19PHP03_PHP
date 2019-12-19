<!DOCTYPE html>
<html>
<head>
    <title>Edit form</title>
    <style type="text/css">
        img {
            width: 150px;
        }
    </style>
</head>
<body>
<?php include 'connect.php';?>
<?php
// get old user to edit
$idEdit = $_GET['id'];

$sqlEdit = "SELECT * FROM users WHERE id = $idEdit";
$dataEdit = mysqli_query($connect, $sqlEdit);
$edit = $dataEdit->fetch_assoc();

// end get old
if (isset($_POST['edit'])) {
    $username = $_POST['username'];
    $image = $edit['image'];
    if ($_FILES['image']['error'] == 0) {
        $avatar = $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
    }
    $sqlEditData = "UPDATE name SET username = '$username', image = '$image' WHERE id = $idEdit";
    if (mysqli_query($connect, $sqlEditData) === TRUE) {
        // chuyen trang
        header('Location: list.php');
    }
}
?>
<h1>Edit form</h1>
<form action="#" method="POST" enctype="multipart/form-data">
    <p>
        <input type="text" name="username" placeholder="username" value="<?php echo $edit['username']?>">
    </p>
    <p>
        <input type="file" name="avatar">
        <img src="uploads/<?php echo $edit['image']?>">
    </p>
    <p>
        <input type="submit" name="edit" value="Edit">
    </p>
</form>
</body>
</html>