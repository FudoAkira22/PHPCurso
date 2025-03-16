<?php
//Numero positivos
$numeros = 1234;
echo $numeros."<br>";
//Numero negativos
$numeros = -123;
echo $numeros."<br>";
//Enteros en notacion octal (base 8 (0-7))
$numeros = 0123;//83
echo $numeros."<br>";
//Numeros notacion hexadecimal(base 16(0-9 a-f))
$numeros = 0x1A;//26
echo $numeros."<br>";
//Enteros binarios
$numeros = 0b11111111;//255
echo $numeros."<br>";
print PHP_INT_SIZE."<br>";//
print PHP_INT_MAX."<br>";//valor del maximo de un entero
?>