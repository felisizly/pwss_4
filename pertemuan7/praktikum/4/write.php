<?php
$file_baru = fopen ("filesaya.txt","w");
echo fwrite ($file_baru, "STMIK AKAKOM YOGYAKARTA jl raya janti 143 Yogyakarta");
fclose($file_baru);
?>