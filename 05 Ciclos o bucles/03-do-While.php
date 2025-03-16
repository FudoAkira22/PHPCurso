<?php
$dado = 0;
do{
$dado = rand(1,6);//Esto indica el valor generado entre uno y 6
print"<p>El resultado del lanzamineto es $dado</p>";
}while($dado > 6);
print '<p>Obtuviste un valor menor a 6 o 6</p>';
?>