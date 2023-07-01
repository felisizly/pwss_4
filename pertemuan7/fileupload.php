<?php
$namaFile = $_FILES['data']['name'];
$x = $_FILES['data']['tmp_name'];
$test = "folder/";

$folder = move_uploaded_file($x, $test.$namaFile);

if ($folder){
    echo "Upload berhasil!<br/>";
    echo "Link File: <a href='".$test.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}
?>