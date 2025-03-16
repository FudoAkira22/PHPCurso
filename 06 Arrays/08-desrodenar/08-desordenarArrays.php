<h1>Elemenos aleatorio en arrays</h1>

<?php
$imagenes = ["1.jpg","2.jpg","3.jpg","4.jpg"];
$imagenesCopy = ["1.jpg","2.jpg","3.jpg","4.jpg"];
?>

<p><b>shuffles():</b> En php se utiliza para reorganizar aleatoriamente
los elementos de una array.</p>
<?php
var_dump($imagenes);
print "<br>";
shuffle($imagenes);
//var_dump($imagenes);
print "<br>";
$image = $imagenes[0];
?>

<hr>
<img src="img/<?php print $image;?>" width="50%">
<hr>

<p><b>array_rand():</b> en php se utiliza para seleccionar uno
o mas indices alatorios de un array.</p>
<?php
var_dump($imagenesCopy);
print "<br>";
$indice = array_rand($imagenesCopy);
?>
<img src="img/<?php print $imagenesCopy[$indice];?>" width="50%">