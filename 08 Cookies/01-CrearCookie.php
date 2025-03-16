<?php
//Se establece el nombre su valo el timepo de expiracion y una ruta
//nombre
$nombre_cookie = "MiCookie";
//valor
$valor_cookie = "chaly@chaly.com|88";
//Tiempo de exporacion
//los numeros en () dice que la duracion expira en un mes de la cookie en segundos
$expiracion = time() + (60*60*24*30);//Time devuelve la hora actual en segundos

setcookie($nombre_cookie,$valor_cookie,$expiracion);
?>
<h1>Crear cookies</h1>
<?php
//Ayudan a tener la sesion de los usuarios activas
//Tambien se puede hacer un seguiento 
//Como las acciones 
?>