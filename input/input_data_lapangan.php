<?php
    include "../conection.php";

    $id_lapangan = $_POST['id_lapangan'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $type_lapangan = $_POST['type_lapangan'];

    $insert = mysqli_query($koneksi,"INSERT INTO data_lapangan SET id_lapangan ='$id_lapangan', jenis_lapangan ='$jenis_lapangan', type_lapangan='$type_lapangan'");
    if($insert == true){
        header('location: ../welcome.php');
    }
    else{
        echo "<script>alert('gagal input data lapangan)</script>";
    }
?>
