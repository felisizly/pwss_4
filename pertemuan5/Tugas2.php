<?php
$angka = array  (6,21,11,33,14,5,17);
//hitung jumlah
$jumlah = count ($angka);
echo "Banyak Anggota Array = " . $jumlah . "<br>";
//hitung total
$total = array_sum($angka);
echo "Jumlah Total Nilai Array = " . $total . "<br>";
//hitung rata - rata
$rata = $total / $jumlah;
echo "Rata - rata = " . $rata . "<br>";
?>