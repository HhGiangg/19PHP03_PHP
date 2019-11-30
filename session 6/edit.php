
<?php
include 'data.php';
    $id = $_GET["id"];
    $sqlSelect = "SELECT * FROM `users` WHERE `id`=".$id;
    $result = mysqli_query($connect, $sqlSelect);
    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
    }

    if(isset($_POST['edit'])){
        //Validate name
        if(!empty($_POST['username'])){
            $userName = $_POST['username'];
        }else{
            echo "Please input your name";
        }
        //Validate password
        if(!empty($_POST['password'])){
            $Password = $_POST['password'];
        }else{
            echo "Please input your password";
        }

        //Validate imag
        $max = 1000000;
        $allowType = array('jpg','png','jpeg','JPG','PNG','JPEG');
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {

           $getName = $_FILES['avatar']['name'];
           $getSizeImg = $_FILES['avatar']['size'];
           $ext = pathinfo($getName, PATHINFO_EXTENSION);
           if ($getSizeImg > $max) {
               echo "không được uploads ảnh lơn hơn"." ".$max;
           }elseif(!in_array($ext, $allowType)){
                echo "chỉ được uploads ảnh có 'jpg','png','jpeg','JPG','PNG','JPEG";
           }else{
                $getTmp = $_FILES['avatar']['tmp_name'];
           }
        }else{
            echo "k cos";
        }

    }
        
        

?>  

<h1>Edit</h1>
<form action="#" method="POST" enctype="multipart/form-data">
    <p>
        <input type="text" name="username" placeholder="username" value ="<?php echo $data['username'] ?>">
    </p>
    <p>
        <input type="password" name="password" placeholder="password" value ="<?php echo $data['password'] ?>">
    </p>
    <P><?php echo "<td><img src='uploads/".$data['avatar']."'></td>";?></P>
    <p>
        <input type="file" name="avatar">
    </p>
    <p>
        <input type="submit" name="edit" value="Edit">
    </p>
</form>