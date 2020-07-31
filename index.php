<?php

//import class / intance
require_once "animal.php";
require_once "ape.php";
require_once "frog.php";


$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false


$sungokong = new Ape("kera sakti");
echo $sungokong->yell; // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
echo $kodok->jump ; // "hop hop"







// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())



?>
