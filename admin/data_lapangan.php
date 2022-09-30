<?php
    include "../conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data lapangan</title>
    <style>
    .daftar{
        background-color: #191414;
        padding: 20px;
        color: #1DB954;
        border-radius: 1px;
    }
    body{
        margin: 0;
        padding: 0;
    }
    input, textarea, select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    button{
        width: 100%;
        background-color:#1DB954;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        color:#191414;
    }
    .judul{
        width: 100;
        padding: 1px 20px;
        background-color:#191414;
        color:#1DB954;
    }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 15px;
        background-color: #191414;
        overflow:hidden;
    }
    .menu-list a{
        display: block;
        color:#1DB954;
        padding: 10px 10px;
        text-decoration: none;
        font-size: 20px;
    }
    </style>
</head>
<body>
<body>
   <ul class="menu">
        <li class="menu-list"> <a href="welcome.php">Back To Home</a> </li>
</ul>
<div class="judul"> <h1> Please fill in the data below</h1> </div>
<form class="daftar" action="../input/input_data_lapangan.php" method="post">
    
        <label for="">Field Id</label><br>
        <input type="text" name="id_lapangan" id="" value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">Field Type</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Field A (Mattress)</option>
            <option value="b">Field B (Synthetic)</option>
            <option value="c">Field C (Vinnyl</option>
        </select>
        <br><br>
        <label for="">Field Type</label><br>
            <select name="type_lapangan" id="">
            <option value="Matteres">Mattress</option>
            <option value="sintetis">Synthetic</option>
            <option value="vinyl">vinnyl</option>
        </select>
        <br><br>

        <button type="submit">Send Data</button>
     </form>
</body>
</html>