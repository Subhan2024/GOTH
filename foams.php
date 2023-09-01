<?php
include('connection.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Form validation</title>
</head>

<body>
    <div class="container-fluid" style="margin-top: 2px;">
        <h1>Form </h1>
        <form action="foams.php" method="post" class="form-group">
            <label for="FirstName">FirstName</label>
            <input type="text" name="FirstName" class="form-control" placeholder="First-Name">
            <br>
            <label for="Age">Age</label>
            <input type="number" name="Age" class="form-control" placeholder="18 Above">
            <br>
            <label for="Gender">Gender</label>
            <input type="text" name="Gender" class="form-control" placeholder="Male/Female">
            <br>
            <input type="Submit" value="Submit" name="Submit" class="btn btn-primary">
        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $FirstName = $_POST['FirstName'];
        $Age = $_POST['Age'];
        $Gender = $_POST['Gender'];

        $query = "INSERT INTO `web` (`NAME`, `AGE`, `GENDER`) VALUES ('$FirstName', '$Age', '$Gender')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed");
        }
        // header('location: http://localhost:82/goth/GOTH/table3.php');
    }
    ?>
</body>

</html>