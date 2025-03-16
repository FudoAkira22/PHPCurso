<h1>Funciones de punteros</h1>

<p>Las funciones de puntero de array son herramientas que nos permiten manipular y acceder 
    a los elementos dentro de un array. Estas funciones nos ayudan a navegar a traves de los
    datos almacenados en un array
</p>

<?php
$fruits = array("apple","banana","orange","grape");
var_dump($fruits);
?>

<p><b>current():</b>Devuelve el valor del elemento actual al que apunta el puntero interno 
    de un array.</p>
<?php
//Imprime el primer elemento del array
print current($fruits)."<br>";
?>

<p><b>next():</b> Avanza el puntero interno al siguiente elemento del array y devuelve su 
valor.</p>
<?php
print next($fruits);
?>

<p><b>prev():</b>Retrocede el puntero interno al elemento anterior del array y devuelve su 
valor.</p>
<?php
print prev($fruits);
?>

<p><b>end():</b> Mueve el puntero interno al ultimo elemento del array y devuelve su valor.</p>
<?php
print end($fruits);
?>

<p><b>reset():</b> Mueve el puntero al primer elemento del array y devuelve si valor</p>
<?php
print reset($fruits);
?>
<hr>

<!--Este es una forma de entrar a cada valor del array-->
<?php
while($fruit = current($fruits)){
    print $fruit."<br>"; 
    next($fruits);
}
?>