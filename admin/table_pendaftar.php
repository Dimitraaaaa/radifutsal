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
            <th align="center">id_pendaftar</th>
            <th align="center">nama_pendaftar</th>
            <th align="center">nomor_hp</th>
            <th align="center">alamat</th>
            <th align="center">jenis_lapangan</th>
            <th align="center">jam_mulai</th>
            <th align="center">jam_selesai</th>
            <th align="center">jenis_pembayaran</th>
        </tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM data_pendaftar");
            while($data = mysqli_fetch_array($query)){ ?>
            <tr>
                <td align="center"><?= $data['id'];?></td>
                <td align="center"><?= $data['id_pendaftar'];?></td>
                <td align="center"><?= $data['nama_pendaftar'];?></td>
                <td align="center"><?= $data['nomor_hp'];?></td>
                <td align="center"><?= $data['alamat'];?></td>
                <td align="center"><?= $data['jenis_lapangan'];?></td>
                <td align="center"><?= $data['jam_mulai'];?></td>
                <td align="center"><?= $data['jam_selesai'];?></td>
                <td align="center"><?= $data['jenis_pembayaran'];?></td>
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