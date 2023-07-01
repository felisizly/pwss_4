<?php 
include('koneksi.php');
if(isset($_POST['simpan'])){
$Id = $_POST['Id'];
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$JenisKelamin = $_POST['Jenis Kelamin'];
$awUsia = $_POST['awUsia'];
$query = "update wahyunursejati set Nama='$Nama', Email='$Email', Jenis Kelaim='$JenisKelamin', awUsia='$awUsia', where Id='$Id'";
$hasil = mysqli_query($koneksi,$query);
if($hasil){
header("location : index.php");
}
else{
echo'Gagal';
}
}
?>

