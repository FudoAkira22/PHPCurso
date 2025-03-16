<h1>Funciones para arrays</h1>

<p>1.-<b>count():</b> Devuelve el numero de elementos de un array</p>
<?php
$fruits = ["Manzana","Pera","banana"];
print count($fruits);
?>

<p>2.-<b>array_push():</b> Insertar uno o mas elementos al final de un array</p>
<?php
print_r($fruits);
array_push($fruits,"Naranja","Fresa");
print"<br>";
print_r ($fruits);//imprime informacion legible para humanos sobre una variable
?>

<p>3.-<b>array_pop():</b> Elimina y devuelve el ultimo elemento de un array</p>
<?php
print array_pop($fruits);//Devolvera el ultimo elemento
print"<br>";
print_r($fruits);
?>

<p>4.-<b>array_shift():</b> Elimina y devuelve el priemr elemento de un array</p>
<?php
print array_shift($fruits);//Devolvera el primer elemento
print"<br>";
print_r($fruits);
?>

<p>5.-<b>array_unshift():</b> Insertar uno o mas elementos al inicio de un array</p>
<?php
array_unshift($fruits,"Coco");
print"<br>";
print_r($fruits);
?>

<p>6.-<b>array_merge():</b> Combina uno o mas arrays en un solo array </p>
<?php
$array2=["coco","pera","banana","naranja"];
$array = array_merge($fruits,$array2);
print"<br>";
print_r($array);
?>

<p>7.-<b>array_slice():</b> Devuelve una porcion para un array</p>
<?php
print_r($fruits);
//Extraer los primeros tres elementos del array
$slice = array_slice($fruits,0,3);
print "<br>";
print_r($slice);
?>

<p>8.-<b>array_reverse():</b> Invierte un array</p>
<?php
print_r($fruits);
print "<br>";
$invertido = array_reverse($fruits);
print_r ($invertido);
?>

<p>9.-<b>array_unique():</b> Elimina valores duplicados de un array</p>
<?php
$fruta1 = ["Manzana","Pera","Banana","Banana"];
print_r ($fruta1);
$unique = array_unique($fruta1);
print "<br>";
print_r ($unique);
?>