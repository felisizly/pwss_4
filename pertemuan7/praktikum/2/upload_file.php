<?php
$namafile = $_FILES['file']['name'];
$tampung_file = $_FILES['file']['tmp_name'];

$dirUpload = "folder_anda/";
$folder_anda = move_uploaded_file ($tampung_file, $dirUpload.$namafile);

if ($folder_anda) {
    echo "Upload berhasil !<br>";
    echo "Link : <a href =' ".$dirUpload.$namafile." '>".$namafile."</a>";
} else{
    echo "Upload Gagal !";
}
?>