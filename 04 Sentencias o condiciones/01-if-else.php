<?php
$edad = 18;
if($edad >= 18){
print '<p>Es mayor de edad</p>';
}else{
    print'<p>no es mayor de edad</p>';
}
/*
if(condicion a cumplir){
accion a realizar si se cumple la condicion
}else{
accion a realizar si no se cumple la condicion
}
*/

//Anidadas esto trata de hacer varias condiciones 
//consecutivas que cumplen como opciones a realizar

$persona = 50;
if($persona <= 10){
print'Es un niño';
}else if($persona >= 11 && $persona <= 17){
print'Es un adolesente';
}else if($persona >= 18 && $persona <= 49){
print'Es un adulto';
}else if($persona >= 50 && $persona <= 100){
print'Es un anciano';
}else{
print 'Que pedo sigues vivo?';
}
?>