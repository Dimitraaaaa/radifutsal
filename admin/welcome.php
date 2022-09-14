<?php
    session_start();
    if($_SESSION['level'] = ""){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <a href="../logout.php">Logout</a>
    <br>
    <h1>LOG IN AS ADMIN</h1>
    <a href="data_lapangan.php">please fill in the field data</a> ||
    <a href="data_pembayaran.php">payment updates</a>
</body>
</html>
