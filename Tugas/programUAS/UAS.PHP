<?php  
class bunga {  
  public $name;  
  public $color;  
  public function __construct($name, $color) {  
    $this->name = $name;  
    $this->color = $color;  
  }  
  protected function intro() {  
    echo "Adalah Bunga <b>{$this->name}</b> dan warnanya <b>{$this->color}</b><br>";  
  }  
  public function public_intro() {  
    echo $this->intro();  
  }  
}  
  
class Mawar extends bunga {  
  public function message() {  
    echo "Apakah bunga ini populer? ";  
  }  
}  
  
$tulip = new bunga("Mawar","Merah");  
$tulip->public_intro();  
  
$mawar = new Mawar("Tulip", "putih");  
$mawar->message();
?>