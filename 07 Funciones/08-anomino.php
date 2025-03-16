<h1>Funciones anonimas.</h1>
<?php
$msg = ", como estas?";
//esto ayuda a reutulizar codigo
//Se le pueden mandar variables definidas fuera de la funcion
$saludo = function ($nombre)use($msg){
    return "Hola ".$nombre.$msg."<br>";
};
print $saludo("Erick");


?>