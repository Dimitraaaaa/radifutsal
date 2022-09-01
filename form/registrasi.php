<?php
    require '../function/function_registrasi.php';

    if(isset($_POST["register"])){

        if(registerasi($_POST) > 0){
            header("location: ../index.php");
            echo"<script>alert('user di tambahkan')</script>";
        }else{
            echo mysqli_error($koneksi);
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
    <style>
        label{
            display:block;
        }
    </style>
<body>
    <h1>welcome to registrasi</h1>

    <form action="" method="post">

       
                <label for="username">username :</label><br>
                <input type="text" name="username" required><br>
                <br><br>
            
                <label for="password">password</label><br>
                <input type="password" name="password" required><br>
                <br><br>
            
                <label for="password2">konfirmasi password</label><br>
                <input type="password" name="password2" required><br>
                <br><br>
           
                <button type="submit" name="register">register</button>
        <p><a href="../index.php">sudah memiliki akun</a></p>
    </form>
</body>
</html>