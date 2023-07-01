<?php
function luas_segitiga($alas,$tinggi){
    $luas = ($alas * $tinggi)/2;
    return $luas;
}
function luas_persegi_panjang($panjang, $lebar){
    $luas = $panjang*$lebar;
    return $luas;
}
$segitiga = luas_segitiga(8,10);
$persegi_panjang= luas_persegi_panjang(5,10);

echo "Luas segitiga : $segitiga";
echo "<br>";
echo "Luas persegi : $persegi_panjang";
?>