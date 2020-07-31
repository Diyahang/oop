<?php

//class
class Animal {
  //property
  public $legs = 2;
  public $cold_blooded = false;

  public function __construct($name){
    $this->name = $name;
  }
  function getName(){
    echo $this->name;
  }
  function get_cold_blooded(){
    echo $this->cold_blooded;
  }
}





 ?>
