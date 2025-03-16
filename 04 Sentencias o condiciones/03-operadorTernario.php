<?php
/**
 * El operador condicional en PHP, a menudo conocido como el operador ternatios, es
 * una forma mas concisa de escribir instrucciones if-else. Se utiliza para asignar 
 * un valor a una variable basado en una condicion
 */
//Variable donde se va a almacenar = (condicion)?primera accion a realias : si no se cumple la condicion
 $edad = 18;
 $msg = "";
 $msg = ($edad>=18)?"Eres mayor de edad" : "Eres menor de edad";
 print"$msg";
?>