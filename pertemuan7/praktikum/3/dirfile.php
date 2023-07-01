<?php
$lokasi = dir ("folder_anda");
while (($file_nama = $lokasi ->read()) !==false)
{
    echo ("File Name : " . $file_nama);
    echo "<br>";
}
$lokasi ->close()
?>
