<?php
// membuat array asosiatif
$Praktikum = [
    "Matakuliah" => "Pemrograman Web Server",
    "Program" => "Teknik Informatika",
    "Kode" => 8709
];
// mencetak isi array assosiatif
for ($i=0; $i<1; $i++) { 
    echo "<h2>".$Praktikum["Matakuliah"]."</h2>";
    echo "<p>Program: ".$Praktikum["Program"]."</p>";
    echo "<p>Kode: ".$Praktikum["Kode"]."</p>";
}
?>