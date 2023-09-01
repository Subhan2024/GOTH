<?php
include 'connection.php';

// print_r($_POST)
$user_id = $_POST['id'];
$user_name = $_POST['FirstName'];
$user_age = $_POST['Age'];
$user_gender = $_POST['Gender'];

$update = "update `web` set NAME ='$user_name' , AGE = '$user_age' , GENDER = '$user_gender' where ID = '$user_id' ";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
}
header('location: http://localhost:82/goth/GOTH/table3.php');
?>