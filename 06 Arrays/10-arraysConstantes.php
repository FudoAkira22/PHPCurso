<h1>Arrays constantes

</h1>
<?php
print "<pre>";
const ANIMALES = ["Perro","Gato","Pez","Dinosaurio"];
var_dump(ANIMALES);
print "</pre>";

print ANIMALES[0];

//En las constantes no se pueden agregar mas cosas o modificar en su caso este array
// ANIMALES[]="conejo"; 
echo "<br>";
//Tambien de esta forma se declaran constantes com la diferencia que no se pone 
//el $ cuando se llamen
define("FRUTAS",["Naranja","Pera","Manzana"]);
foreach(FRUTAS as $fruta){
    echo $fruta."<br>";
}

?>