<?php
require "persegipjg.php";

class kotak extends persegipjg{
    public function Kotak()
    {
        if ($this->panjang == $this->lebar) {
            return true;
        }else{
            return false;
        }
    }
}
$objek = new kotak;

$objek->panjang = 20;
$objek->lebar = 20;

if ($objek->kotak()) {
    echo "ini adalah kotak dengan cara inheritance";
}else{
    echo "ini adalah persegi panjang";
};
echo "<br/>";
echo "luas kotak : ".$objek->getLuas();
?>