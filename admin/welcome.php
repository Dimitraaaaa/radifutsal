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
    <title>Welcome</title>
    <style>
    body{
        background-color:#191414;
        }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color:#191414;
        overflow:hidden;
    }
    .menu-list{
        float: left;
    }
    .menu-list a{
        display: block;
        color:#1DB954 ;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 25px;
    }
    .menu-list a:hover {
        background-color: #191414;
    }
    .jumbotron{
        padding: 30px;
    }
    .container{
        margin: 0 auto;
        padding: 30px;
        border-radius: 10px;
    }
    .jumbotron .container{
        max-width: 100%;
        background-color: ;
    }
    .jumbotron h3{
        text-align: left;
        color:#1DB954;
        font-family:'roleway', helvetica, arial, sans-serif;
        font-weight: 600;
        font-size: 40px;
        text-transform: uppercase;
    }
    .jumbotron p{
        text-align: left;
        color:#1DB954;
        font-family:'roleway', helvetica, arial, sans-serif;
        font-weight: 600;
        font-size: 30px;
        text-transform: uppercase;
    }

    </style>
</head>
<body>
   <ul class="menu">
        <li class="menu-list"> <a href="../logout.php">|| Log out ||</a> </li>
        <li class="menu-list"> <a href="data_lapangan.php">|| Please fill in the field data ||</a></li>
        <li class="menu-list"> <a href="data_pembayaran.php">|| Update payment ||</a> </li>
        <li class="menu-list"> <a href="table_pendaftar.php">|| Registrant table ||</a> </li>
        <li class="menu-list"> <a href="table_pembayaran.php">|| Payment table ||</a> </li>
   </ul>
   <div class="jumbotron">
    <div class="container">
    <h3>Log in as Admin</h3>
    <p>Welcome, <?php echo strtoupper($_SESSION['username']) ?> !. you in admin page</p>
    </div>
     </div>
</body>
</html>
