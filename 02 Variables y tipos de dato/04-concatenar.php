<?php
$name = "Erick";
$lastName = "Medina";
$age = 23;

print 'Mi nombre es '.$name." y mi apellido es ".$lastName." y tengo ".$age."años \n";
print "<hr>";
print "Mi nombre es $name y mi apellido es $lastName y tengo $age años \n";

print "<hr>";
//Tambien se pueden concatenar desde una variable
$datos="Mi nombre es $name y mi apellido es $lastName y tengo $age años";
print $datos;

print "<hr>";
//Tambien
$salida = $name ." ";
$salida .= $age;
print $salida;

?>