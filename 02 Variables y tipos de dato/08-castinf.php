<?php
$a = 3.33;
 print (integer) $a."<br>";//De esta forma tambien se cambia el valor de la variable
 print var_dump($a)."<br>";
 print var_dump((integer) $a)."<br>";

 //Esto forzara a un valor
 var_dump((string)$a);
print "<br>";
 //var dump hace que se cambie el valor tipo de dato
 //y que te de el tipo de dato que es
 var_dump((float)$a);
 print "<br>";
 var_dump((boolean)$a);//Este es true
 print "<br>";
 var_dump((boolean)$a = false);//este da otro valor
 print "<br>";
 var_dump(intval($a = 3.33));//Esto lo cambia directo a entero
 print "<br>";
var_dump(floatval($a));//Este lo cambia directo a float
print "<br>";
var_dump(strval($a));//Este lo cambia directo a string con un tamano de 4 
print "<br>";
settype($a, "integer");//Este tmambien cambia el valor 
var_dump($a);//Este lo cambia directo a float
print "<br>";
settype($a, "float");//lo que hay en los ""Es el tipo de variable al que se comvertira
var_dump($a);
print "<br>";
print gettype($a);
?>