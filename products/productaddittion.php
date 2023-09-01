<?php
include('connection.php');

if(isset($_POST['Submit'])){
    $pname = $_POST['name'];
    $p_cat = $_POST['cat'];
    $p_des = $_POST['des'];
    $p_name = $_FILES['img']['name'];
    $pimg_tempname = $_FILES['img']['tmp_name'];
    $pimg_size = $_FILES['img']['size'];

    $pinsert = "INSERT INTO `products` (`pname`, `pcategory`, `pdescription`, `pimage`) VALUES ('$pname', '$p_cat', '$p_des', '$p_name')";
    $result = mysqli_query($conn , $pinsert);
    move_uploaded_file($pimg_tempname , 'products'. $p_name);
    if(!$result){
        echo "error in query";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
<h1>Products </h1>
        <form action="productaddittion.php" method="post" class="form-group" enctype="multipart/form-data">
            <label for="FirstName">Name</label>
            <input type="text" name="name" class="form-control">
            <br>
            <label for="cat">Category</label>
            <input type="text" name="cat" class="form-control">
            <br>
            <label for="des">Description</label>
            <input type="text" name="des" class="form-control" >
            <br>
            <label for="img">Image</label>
            <input type="file" name="img" class="form-control" >
            <br>
            <input type="Submit" value="Submit" name="Submit" class="btn btn-primary">
        </form>
        </div>
</body>
</html>