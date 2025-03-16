<?php
$a = 5;
$b = 5;

print '<p>Las varaibles que usare son a ='.$a.'  y b = '.$b.'</p>';

print '<hr>';
print '<h3>Aqui se comparara con and </h3>';
print '<p>true and true </p>';
var_dump($a==$b && $b == $a);//=true
print '<p>true and false </p>';
var_dump($a==$b && $b != $a);//=false
print '<p>false and true </p>';
var_dump($a!=$b && $b == $a);//=false
print '<p>false and false </p>';
var_dump($a!=$b && $b != $a);//=false

print '<hr>';
print '<h3>Aqui se comparara con or </h3>';
print '<p>true and true </p>';
var_dump($a==$b || $b == $a);//=true
print '<p>true and false </p>';
var_dump($a==$b || $b != $a);//=true
print '<p>false and true </p>';
var_dump($a!=$b || $b == $a);//=true
print '<p>false and false </p>';
var_dump($a!=$b || $b != $a);//=false

print '<hr>';
print '<h3>Aqui se comparara con XOR </h3>';
print '<p>true and true </p>';
var_dump($a==$b XOR $b == $a);//=false
print '<p>true and false </p>';
var_dump($a==$b XOR $b != $a);//=true
print '<p>false and true </p>';
var_dump($a!=$b XOR $b == $a);//=true
print '<p>false and false </p>';
var_dump($a!=$b XOR $b != $a);//=false
?>