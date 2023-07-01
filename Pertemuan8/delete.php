<?php
include('koneksi.php');
$nim =$_GET['nim'];

    $hasil = mysqli_query($koneksi, "DELETE FROM mahasiswass WHERE nim='$nim'");
    if ($hasil){
        header('location: index.php');
    }else{
        echo "GAGAL";
    }
?>