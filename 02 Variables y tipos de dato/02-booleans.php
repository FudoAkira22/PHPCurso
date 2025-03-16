<?php 
$isAdming = (bool)0;
var_dump($isAdming);


if($isAdming){
print "Hola admin";
}else{
    print "No te has autenticado";
}


echo "<br>";
$isAdming2 = (bool)1;//Esto equivale a true
var_dump($isAdming2);//Sirve para ver la info de una variable

if($isAdming2){
print "Hola admin";
}else{
    print "No te has autenticado";
}
?>