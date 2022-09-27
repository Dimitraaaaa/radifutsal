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
        background-color: brown;
        padding: 20px;
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
        background-color:grey;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        color:black;
    }
    .judul{
        width: 100;
        padding: 1px 20px;
        background-color: brown;
    }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 15px;
        background-color:brown;
        overflow:hidden;
    }
    .menu-list a{
        display: block;
        color: black;
        padding: 10px 10px;
        text-decoration: none;
        font-size: 20px;
    }
    </style>
</head>
<body>
<body>
   <ul class="menu">
        <li class="menu-list"> <a href="../logout.php">LOGOUT</a> </li>
        <li class="menu-list"> <a href="data_lapangan.php">isi data lapangan</a> </li>
</ul>
<div class="judul"> <h1> silahkan</h1> </div>
<form class="daftar" action="../input/input_data_lapangan.php"method="post">
    
        <label for="">Field Id</label><br>
        <input type="text" name="id_lapangan" id="">
        <br><br>
        <label for="">Field Type</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Field A (Mattress)</option>
            <option value="b">Field B (Synthetic)</option>
            <option value="c">Field C (Vinnyl</option>
        </select>
        <br><br>
        <label for="">Field Type</label><br>
            <select name="type_lapangan" id="">mattress
            <option value="sintetis">synthetic</option>
            <option value="vinyl">vinnyl</option>
        </select>
        <br><br>

        <button type="submit">Send Data</button>
     </form>
</body>
</html>