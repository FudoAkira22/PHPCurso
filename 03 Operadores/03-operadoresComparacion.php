<?php
$a = 5;
$b = "5";

print '<p> a='.$a.' estos son los valores b='.$b.'</p>';

print '<p>igualdad (==): devuelve verdadero si $a es igual a $b.</p>';
var_dump($a == $b);

print '<p>Identidad (===): devuelve verdadero si $a es igual a $b y son del mismo tipo de dato.</p>';
var_dump($a === $b);

print '<p>Diferente (!= <>): devuelve verdadero si $a no es igual a $b.</p>';
var_dump($a != $b);
var_dump($a <> $b);

print '<p>No identidad (!==): devuelve verdadero si $a no es igual a $b o si no son del mismo tipo.</p>';
var_dump($a !== $b);

print '<p>Menor que (<): devuelve verdadero si $a es menor que $b.</p>';
var_dump($a == $b);

print '<p>Mayor que (>): devuelve verdadero si $a es mayor que $b.</p>';
var_dump($a == $b);

print '<p>Menor igual que (<=): devuelve verdadero si $a es menor o igual a $b.</p>';
var_dump($a == $b);

print '<p>Mayor igual (>=): devuelve verdadero si $a es mayor o igual a $b.</p>';
var_dump($a == $b);

print '<p>Nave espacial (<=>): Compara dos valores y devuyelve un numero menor que igual a o mayo que cero segun la relacion entre ellos</p>';
var_dump($a <=> $b);

print '<p>Operador de fusion de null (??) Proporciona una forma concisa de definir un valor por defecto para una variable si la variable no esta definida o es null</p>';
var_dump($a ?? $b);
?>