<h1>Ambito variables</h1>

<?php
/**\
 * Variables
 * se definen primero las variabels
 */

$nombre = 'Erick';//Ambito global
$msg = "buen dia";
/**
  * Funciones
  */
function saluddo($nombre/*,$msg*/){
    $salida = '';//ambito local (solo existe dentro de la funcion)
    global $msg;//Esta es una forma de traer la variable global 
    //sin ponerlo como parametro
    print "Hola $nombre, $msg.<br>";
}
  /**
   * run
   */
saluddo($nombre,$msg);

?>