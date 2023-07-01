<?php
include('koneksi.php');
$Id =$_GET['Id'];

    $hasil = mysqli_query($koneksi, "DELETE FROM wahyunursejati WHERE Id='$Id'");
    if ($hasil){
        header('location: index.php');
    }else{
        echo "GAGAL";
    }
?>