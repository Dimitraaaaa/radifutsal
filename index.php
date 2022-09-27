<?php

include "conection.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header('location: index.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from login where username='$username' and password='$password'";

    $result = mysqli_query($koneksi, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['hak_akses'] == '1'){
            #code
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: ./admin/welcome.php');
        }elseif($row['hak_akses'] == '9'){
            #code
            $_SESSION['username'] = $row['username'];
            $_SESSION['hak_akses'] = $row['hak_akses'];
            header('location: welcome.php');
        } 
    }else{
        echo "<script>alert('Username atau Password Salah, Silahkan di ulangi')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        /* .background{
            background-image: url("./asset/img/dzfrey.gif");
            background-size: cover;
            background-repeat: no-repeat;
        } */
        body {
            font-family:sans-serif;
            background-image: url("./asset/img/dzfrey.gif");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login {
            width: 350px;
            background: light blue;
            margin: 80px auto;
            padding: 30px 20px;
            color: white;
        }
        .judul {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }
        .input_form {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
            border-color: black;
            border-radius: 10px;       
        }
        .tombol_login {
            background-color: black;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 10px;
            padding:10px 20px ;
        }
        .link {
            color: black;
            text-decoration: none;
            font-size: 13pt;
        }
        .text{
            text-align: center;
        }
    </style>
</head>
<body>
    <!--<div class="background"> -->
        <div>
            <h4 style="color: red;"><?= $_SESSION['error'] ?></h4>
        </div>
        <div class="kotak_login">
            <p class="judul">LOG in to continue</p>
   
            <form action="" method="post">

                <input class ="input_form" type="text" placeholder="Username" name="username" required>
                <br><br>
                <input class ="input_form" type="password" placeholder="Password" name="password" required>
                <br><br>
                <button class="tombol_login" name="submit" class="btn">Login</button>

                <p class="text">you don't have an account yet? <a href="../" class="link">register</a></p>
            </form>
        </div>
     <!-- </div> -->
</body>
</html>