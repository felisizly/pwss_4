<?php
include 'koneksi.php';

$Id = $_POST['Id'];
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$JenisKelamin = $_POST['JenisKelamin'];
$awUsia = $_POST['awUsia'];

mysqli_query($koneksi,"insert into wahyunursejati values('$id','$Nama','$Email','$JenisKelamin','$awUsia')");
header("location : index.php");
?>