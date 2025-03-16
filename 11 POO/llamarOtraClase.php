<?php
//include "constructor.php";
require_once "constructor.php";


$vegetea = new Saiyajin("Vegueta",2000);
echo $vegetea -> nivelDeP();
echo $vegetea -> Saludar("Hey insecto soy");
echo "<br><br>";
$goku = new Saiyajin("Goku",1010);
echo $goku -> nivelDeP();
echo $goku -> Saludar();
 echo "<br><br>";

 $gohan = new Saiyajin("Gohan ",3000);

 echo $gohan -> nivelDeP();
echo $gohan -> Saludar("");

?>