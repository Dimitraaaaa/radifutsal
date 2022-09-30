<?php
    include "../conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Data</title>
    <style>
    .daftar{
        background-color: #191414;
        padding: 20px;
        border-radius: 1px;
        color: #1DB954;
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
        background-color: #191414;
        color:#1DB954;
    }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 15px;
        background-color:#191414;
        overflow:hidden;
    }
    .menu-list a{
        display: block;
        color:#1DB954 ;
        padding: 10px 10px;
        text-decoration: none;
        font-size: 20px;
    }
    </style>
</head>
<body>
<ul class="menu">
        <li class="menu-list"> <a href="welcome.php">Back To Home</a> </li>
</ul>
<div class="judul"> <h1> Please Fill In The fields Below</h1> </div>
<form class="daftar" action="../input/input_data_pembayaran.php"method="post">

    <label for="">Payment Id</label><br>
    <input type="text" name ="id_pembayaran" id="" value="<?= rand(0000, 9999)?>" readonly>
    <br><br>
    <label for="">Registrant Id</label><br>
    <input type="text" name ="id_pendaftar" id="" value="<?= rand(0000, 9999)?>" readonly>
    <br><br>
    <label for="">Field Type</label><br>
    <select name="jenis_lapangan" id="">
        <option value="a">Field A (mattress)</option>
        <option value="b">Field B (synthetic)</option>
        <option value="c">Field C (vinnyl)</option>
    </select>
    <br><br>
    <label for="">Type of Payment</label>
    <select name="jenis_pembayaran" id="">
        <option value="cash">Cash</option>
        <option value="transfer">Transfer</option>
    </select>
    <br><br>
    <label for="">Payment Amount</label><br>
    <input type="text" name="nominal_pembayaran" id="">
    <br><br>
    <select name="status_pembayaran" id="">
        <option value="...">...</option>
        <option value="lunas">Paid Off</option>
    </select>

        <button type="submit">Send</button>
    </form>
    
</body>
</html>