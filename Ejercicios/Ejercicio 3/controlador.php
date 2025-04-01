<?php
/*Haz un formulario con radio button para elegir circulo, triangulo y cuadrado
y calcula su area en cada caso. De momento poner todos los inputs necesarios
*/
include 'index.php';

$base = floatval($_POST['base']??0.0);
$altura = floatval($_POST['altura']??0.0);
$radio = floatval($_POST['radio']??0.0);
$lado = floatval($_POST['lado']??0.0);
$figura = $_POST['figura']??"";
define ('PI',3.1416);//Es una constante PI

function Cuadrado($lado){
    return $lado * $lado;
}

function Triangulo($base,$altura){
    return ($base * $altura)/2;
}

function Circulo($radio){
    return ($radio * $radio) * PI;
}

if($figura == "triangulo"){
    print "<p>El resultado es ".Triangulo($base,$altura)."</p>";
}else if($figura == "cuadrado"){
    print "<p>El resultado es ".Cuadrado($lado)."</p>";
}else if($figura == "circulo"){
    print "<p>El resultado es ".Circulo($radio)."</p>";
}else{
    print "<p>No seleccionaste figura</p>";
}
?>