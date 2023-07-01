File Proses <hr/>
<?php
$jurusan = $_POST["jurusan"];
switch ($jurusan){
    case "TI":
        echo "Jurusan anda Teknik Informatika ";
        break;
    case "SI":
        echo "Jurusan anda Sistem Informasi ";
        break;
    case "MI":
        echo "Jurusan anda Manajemen Informatika ";
        break;
    case "TK":
        echo "Jurusan anda Teknik Komputer ";
        break;
    case "KA":
        echo "Jurusan anda Komputerisasi Akuntansi ";
        break;
    default :
    echo "Jurusan anda tidak ada ";
}

$nilai = $_POST ["angka"];
echo "Nilai Anda = " . $nilai . "  " ;

if  ($nilai > 100){
    echo "Nilai Kelebihan";
}elseif ($nilai > 70){
    echo "Selamat Anda Lulus Ujian";
}elseif ($nilai >= 40){
    echo "Anda harus ujian lagi";
} else {
    echo "Maaf, gagal";
}
?>