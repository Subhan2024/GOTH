<?php
include('connection.php');
include('header.php');

$user_id = $_GET['id'];

$restore = "UPDATE `web` SET status = '1' where id = '$user_id' ";
$sqlconn = mysqli_query($conn, $restore);
if($sqlconn){
    
    header('location: table3.php');
}else{
    echo "query failed";
}
?>


