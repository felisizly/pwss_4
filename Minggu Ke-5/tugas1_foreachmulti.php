<?php
// array 2 dimensi menggunakan array asosiatif
$Praktikum  =[
    [
        "Matakuliah" => "Pemrograman Web Server",
        "Prodi" => "Teknik Informatika",
        "Kode" => 8709
    ],
    [
        "Matakuliah" => "Manajemen Sistem Informasi",
        "Prodi" => "Sistem Informasi",
        "Kode" => 5711
    ],
    [
        "Matakuliah" => "Pemrograman Sever",
        "Prodi" => "Manajemen Informatika",
        "Kode" => 1279
    ]
];
// menampilkan array
$x = array_keys($Praktikum);
for($i=0; $i<count($x); $i++){
    $obj_key = $x[$i];
    $kuliah = $Praktikum[$obj_key];
    echo "Praktikum: <br>";
$y = array_keys($kuliah);
for($k=0; $k<count($y); $k++){
    $key = $y[$k];
    $value = $kuliah[$key];
    echo "$key: $value <br>";
}
echo "<br>";
}
?>