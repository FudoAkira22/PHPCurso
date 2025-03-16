<h1>Definir funciones</h1>
<p>En php una funcion es un bloque de codigo que se peude llamar desde cualquier 
    parte de un programa, para realizar una tarea especifica, permiten organizar yieldreutilizar el codigo 
    facilitando el desarrollo y mantenimiento de aplicaciones web    
</p>

<?php
function hola_mundo($palabra="defecto"){
    return "Hola  ".$palabra."<br>";
}
$palabra = "Mundo";
print hola_mundo($palabra);//Palabra es un argumento
print hola_mundo(", Erick");
print hola_mundo();
?>