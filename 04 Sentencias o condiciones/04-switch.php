<?php
/**
 * Permite evaluar una expresion y ejecutar diferentes bloques de codigo en funcion
 * del valor de esa expresion. es una alternativa al uso repetitivo de multiples
 * condicion if-else, lo que puede resultar tedioso y propenso a errores
 * 
 * cada caso debe finalizar con break para evitar que la ejecucion continue 
 * hacia los siguientes casos
 * 
 * El bloque defaul es opcional y se ejecuta cuando ningun caso coincide con 
 * el valor de la expresion
 * 
 * Puedes tener multiples casos que ejecuten el mismo bloque de codigo
 */

/**
 * switch(valor a tomar en cuenta){
 *case 'valor':
 *Accion a realizar si se cumple
 *break;
 *case 'valor':
 *Accion a realizar si se cumple
 *break;
 *default:
 *accion a realizar si no se cumple
 *break;
 *}
 */
$op = 3;
$dia;
switch ($op) {
    case 1:
        print "Lunes";
        $dia = "Lunes";
        break;
    case 2:
        print "Martes";
        $dia = "Martes";
        break;
    case 3:
        print "Miercoles";
        $dia = "Miercoles";
        break;
    case 4:
        print "Jueves";
        $dia = "Jueves";
        break;
    case 5:
        print "Viernes";
        $dia = "Viernes";
        break;
    case 6:
        print "Sabado";
        $dia = "Sabado";
        break;
    case 7:
        print "Domingo";
        $dia = "Domingo";
        break;
    default:
        print "Ese dia no existe";
        break;
}
print '<hr>';
switch ($dia) {
    case "Lunes":
    case "Martes":
    case "Miercoles":
    case "Jueves":
    case "Viernes":
        print "Dia laboral";
        break;
    case "Sabado":
    case "Domingo":
        print "Dia de descanso";
        break;
    default:
        print "Ese dia no existe";
        break;
}
?>