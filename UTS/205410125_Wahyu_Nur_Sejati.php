<?php
//nomor 1

echo "Nomor 1<br>";
$a = 10;
$b = 12;
 function add ($a,$b){
     return $a + $b;
 }
 echo " Nilai a = $a <br> Nilai b = $b<br>
 Jumlah = ". ($a + $b);


 //nomor 2
 echo "<br>";
 echo "<br>";
 echo "Nomor 2<br>";
for ($i=1; $i<=5; $i++){
    for ($j=1; $j<=5; $j++){
echo $i." saya pusing pak, soalnya susah ";
}
 echo "<br />";
 echo "<br />";
}

//nomor 3
echo "Nomor 3";
$mahasiswasaya = [
    [ 'nama' => 'Susanti', 
     'alamat' => 'Jakarta', 
     'tanggal_lahir' => '5 Juni 1999', 
     'umur' => 23], 
    ['nama' => 'Juniar', 
    'alamat' => 'Yogyakarta',
    'tanggal_lahir' => '21 Februari 1998',
    'umur' => 24,], 
];
//menampilkan array
foreach ($mahasiswasaya as $post) {
    echo "<p>".$post["nama"]."<p>";
    echo "<p>".$post["alamat"]."<p>";
    echo "<p>".$post["tanggal_lahir"]."<p>";
    echo "<hr>";

}
    
 ?>
 