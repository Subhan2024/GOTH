<?php

include('connection.php');

$user_id = $_GET['id'];
$where = "select * from `web` where id='$user_id'";
$res = mysqli_query($conn, $where);
if (!$res) {
    die("Query Failed");
}
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
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
                <h1>Update Detail</h1>
                <form action="UPDATEDATA.php" method="post" class="form-group">
                    <label for="FirstName">FirstName</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
                    <input type="text" name="FirstName" class="form-control" placeholder="First-Name"
                        value="<?php echo $row['NAME'] ?>">
                    <br>
                    <label for="Age">Age</label>
                    <input type="number" name="Age" class="form-control" placeholder="18 Above"
                        value="<?php echo $row['AGE'] ?>">
                    <br>
                    <label for="Gender">Gender</label>
                    <input type="text" name="Gender" class="form-control" placeholder="Male/Female"
                        value="<?php echo $row['GENDER'] ?>">
                    <br>
                    <input type="Submit" value="Submit" name="Submit" class="btn btn-primary">
                </form>
            </div>
            <?php
    }
}
?>
</body>

</html>