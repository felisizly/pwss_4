<?php
include 'connect.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];

mysqli_query($con, "insert into barang values('', '$nama', '$harga', '$jumlah', '$status')");
?>