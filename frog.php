<?php

require_once "animal.php";

class frog extends Animal{
public $jump = "hop hop";

public function __construct($name){
  $this->name = $name;
}
function getJump(){
  echo $this->jump;
}
}



?>
