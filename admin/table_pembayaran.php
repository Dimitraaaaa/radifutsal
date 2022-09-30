<?php
    include "../conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body{
        margin: 0;
        padding: 0;
        }
    .menu{
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #1DB954;
        overflow:hidden;
        color: #191414;
    }
    .menu-list{
        float: left;
    }
    .menu-list a{
        display: block;
        color:#191414 ;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 23px;
    }
    .menu-list a:hover {
        background-color:#1A1B41;
    }
    </style>
</head>
<body>
    <ul class="menu">
        <li class="menu-list"> <a href="../admin/welcome.php">Back to home</a></li>
        <li class="menu-list"> <a href="../logout.php">Logout</a></li>
    <table border="1" align="center" cellpadding = "10" cellspacing ="1">
        <tr>
            <th align="center">id</th>
            <th align="center">id_pembayaran</th>
            <th align="center">id_pendaftar</th>
            <th align="center">jenis_lapangan</th>
            <th align="center">jenis_pembayaran</th>
            <th align="center">nominal_pembayaran</th>
        </tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM data_pembayaran");
            while($data = mysqli_fetch_array($query)){ ?>
            <tr>
                <td align="center"><?= $data['id'];?></td>
                <td align="center"><?= $data['id_pembayaran'];?></td>
                <td align="center"><?= $data['id_pendaftar'];?></td>
                <td align="center"><?= $data['jenis_lapangan'];?></td>
                <td align="center"><?= $data['jenis_pembayaran'];?></td>
                <td align="center"><?= $data['nominal_pembayaran'];?></td>
            </tr>
        <?php }
    ?>
        </table>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>