 Data Belanja<hr/>
<?php
    $NamaBarang = $_POST['NamaBarang'];
    $KdBarang = $_POST['KdBarang'];
    $Harga = $_POST['Harga'];
    $Jumlah = $_POST['Jumlah'];
    $Total =$Harga*$Jumlah;
    echo "Nama Barang = " . $NamaBarang . "<br/>";
    echo "Kode Barang       = " . $KdBarang . "<br/>";
    echo "Harga             = " . $Harga . "</br>";
    echo "Jumlah           = " . $Jumlah . "<br/>";
    echo "Total               = " . $Total . "</br>";
?> 