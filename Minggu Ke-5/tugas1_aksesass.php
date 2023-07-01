<?php
$Praktikum = [
    "Matakuliah" => "Pemrograman Web Server",
    "Program" => "Teknik Informatika",
    "Kode" => 8709
];
// mencetak isi array assosiatif
$a = array_keys($Praktikum);
for ($i=0; $i < count($a); $i++){
    $x = $a[$i];
    $x_value = $Praktikum[$x];
    echo "" . $x . " : " . $x_value;
    echo "<br/>";
}
?>