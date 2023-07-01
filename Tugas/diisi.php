<?php 
$nilai = $_POST["angka"];
$nilai2 = $_POST["angka2"];
$nil = $_POST["angka"];
$x=0;

if($nilai >= $nilai2)
while($nilai >= $nilai2){
$i=0;
   while($i < $nil ){
	echo "$x";
	$i++;
    }
$x++;
echo"<br>";
$nilai--;
}

else
echo "nilai X lebih kecil daripada Y";

?>