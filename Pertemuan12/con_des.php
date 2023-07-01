<?php
class persegipjg{
    public $panjang = 0;
    public $lebar = 0;
    public function __construct(){
        echo "Ini dari construktor persegi panjang";
    }
    public function getKeliling(){
        return (2*($this->panjang + $this->lebar));
    }
    public function getLuas()
    {
        return ($this->panjang * $this->lebar);
    }
    public function __destruct()
    {
        echo "Ini dari destructor persegi panjang";
    }
}
$objek = new persegipjg();

$objek -> panjang = 30;
$objek -> lebar = 20;
echo "<br/>";
echo $objek->getKeliling();
echo "<br/>";
echo $objek->getLuas();
echo "<br/>";

unset($objek);
echo "<br/>";
echo "Objek telah dihapus";
?>