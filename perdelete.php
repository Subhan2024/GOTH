<?php
include('connection.php');
$user_id = $_GET['id'];

$delete = "DELETE from `web` where id = '$user_id'";

$result = mysqli_query($conn, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location: http://localhost:82/goth/GOTH/table3.php');
?>