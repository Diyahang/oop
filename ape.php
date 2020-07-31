<?php
require_once "animal.php";

class Ape extends Animal{
public $yell = "Auoo";

public function __construct($name){
  $this->name = $name;
}
function getYell(){
  echo $this->yell;
}
}
?>
