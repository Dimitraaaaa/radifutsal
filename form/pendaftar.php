<?php
    include "../conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pendaftar</title>
    <style>
        body{
            margin:0;
            padding:0;
        
        }
         .form{
            background-color:brown;
            padding:20px;
            border-radius:5px;
        }
        input, textarea, select{
            width:100%;
            padding:12px 20px;
            margin:8px 0;
            display: inline-block;
            border:solid #ccc;
            border-radius:3px;
            box-sizing: border-box;
        }
        button{
            width:100%;
            background-color: grey;
            padding:14px 20px;
            margin:8px 0;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
            color:white;

        }


    </style>
       


</head>
<body>
    <h1>Please Fill In The Fields Below</h1>
    <a href="../welcome.php">Back To Home</a>

    <form class="form"action="../input/input_data_pendaftar.php" method="post">

        <label for="">Registrant id</label><br> 
        <input type="text" name="id_pendaftar" id="" rand(9999.11111) readonly>
        <br><br>
        <label for="">Registrant's Name</label> <br>
        <input type="text" name="nama_pendaftar" id="">
        <br><br>
        <label for="">Mobile Phone Number</label><br>
        <input type="text" name="nomor_hp" id="">
        <br><br>
        <label for="">Address</label><br>
        <textarea name="alamat" id="" cols="50" rows="10"></textarea>
        <br><br>
        <label for="">Field type</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Field A (mattress)</option>
            <option value="b">Field B (synthetic)</option>
            <option value="c">Field C (vinnyl)</option>
        </select>
        <br><br>
        <label for="">Start Time</label><br>
        <input type="time" name="jam_mulai" id="">
        <br><br>
        <label for="">Finished Time</label><br>
        <input type="time" name="jam_selesai" id="">
        <br><br>
        <label for="">Type Of Payment</label>
        <select name="jenis_pembayaran" id="">-
            <option value="cash">Cash</option>
            <option value="Transfer">Transfer</option>
        </select>
        <br><br>

        <button type="submit">Send Data</button>
        
    </form>
</body>
</html>