<?php
$angka = array(6,21,11,33,14,5,17);

//Hitung Banyak
echo "Banyak Anggota Array = ";
$hitung = count($angka);
echo $hitung."<br>"."<br>";

//Hitung Total
echo "Jumlah Total Nilai Array = ";
$total = array_sum($angka);
echo $total."<br>"."<br>";
//Hitung Rata-Rata
echo "Nilai Rata-Rata Array = ";
$rata = $total / $hitung;
echo $rata;
?>