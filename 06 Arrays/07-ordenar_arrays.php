<h1>Ordenar Arrays</h1>

<p>Estas funciones pueden modificar el array original.
    Si deseamos mantener el array original, podemos hacer
    una copia del array antes de llamar a estas funciones
</p>

<?php
$frutas = ["manzana","banana","durazno","pera","cereza"];
$numeros = [5,3,8,1,2,4,6,7];
$asociativos = [2=>"b", 3=>"c",1=>"a"];
$asociativos2 = ["b"=>2, "c"=>3,"a"=>1];
$asociativoCopy = ["b" => 2, "a" => 1, "c" => 3];
?>

<p><b>sort():</b> Ordena un array en orden ascendente.</p>
<?php
var_dump($frutas);
sort($frutas);
//En este caso se ordenaran de forma alfabetica 
print "<br>";
foreach($frutas as $fruta){
    print $fruta."<br>";
}
//En este caso se ordenaran de forma numerica
var_dump($numeros);
print "<br>";
sort($numeros);
foreach($numeros as $numero){
    print $numero."<br>";
}

var_dump($asociativos);
print "<br>";
sort($asociativos);
foreach($asociativos as $asociativo){
    print $asociativo."<br>";
}

var_dump($asociativos2);
print "<br>";
sort($asociativos2);
foreach($asociativos2 as $asociativo2){
    print $asociativo2."<br>";
}
print "<hr>";
?>

<p><b>rsort():</b> Ordena un arrat en orede descendente.</p>
<?php
var_dump($frutas);
rsort($frutas);
//En este caso se ordenaran de forma alfabetica 
print "<br>";
foreach($frutas as $fruta){
    print $fruta."<br>";
}
//En este caso se ordenaran de forma numerica
var_dump($numeros);
print "<br>";
rsort($numeros);
foreach($numeros as $numero){
    print $numero."<br>";
}

var_dump($asociativos);
print "<br>";
rsort($asociativos);
foreach($asociativos as $asociativo){
    print $asociativo."<br>";
}

var_dump($asociativos2);
print "<br>";
rsort($asociativos2);
foreach($asociativos2 as $asociativo2){
    print $asociativo2."<br>";
}
print "<hr>";
?>

<p><b>asort():</b> Ordenar un array asociativo en orden ascendente,
manteniendo la asociacion entre claves y valores.</p>
<?php
foreach ($asociativoCopy as $key => $value) {
    print "[".$key."]= $value <br>";
 }
 asort($asociativoCopy);
 print "<br>";
 foreach ($asociativoCopy as $key => $value) {
    print "[".$key."]= $value <br>";
 }
print "<hr>";
?>

<p><b>arsort():</b> Ordena un array asociativo en orden descendente
manteniendo la asociacion entre claves y valores</p>
<?php
foreach ($asociativoCopy as $key => $value) {
    print "[".$key."]= $value <br>";
 }
 arsort($asociativoCopy);
 print "<br>";
 foreach ($asociativoCopy as $key => $value) {
    print "[".$key."]= $value <br>";
 }
print "<hr>";
?>

<p><b>ksort():</b> Ordena un array asociativo por claves en orden ascendente</p>
<?php
$asociativo3 = ["b" => 6, "a" => 0, "c" => 4];
foreach ($asociativo3 as $key => $value) {
   print "[".$key."]= $value <br>";
}
ksort($asociativo3);
print "<br>";
foreach ($asociativo3 as $key => $value) {
   print "[".$key."]= $value <br>";
}
print "<hr>";
?>

<p><b>krsort():</b>Ordena un array asociativo por claves en orden descendente</p>
<?php
foreach ($asociativo3 as $key => $value) {
    print "[".$key."]= $value <br>";
 }
 krsort($asociativo3);
 print "<br>";
 foreach ($asociativo3 as $key => $value) {
    print "[".$key."]= $value <br>";
 }
print "<hr>";
?>