<?php
//break:
/**
 * la sentencia break se utiliza para salir inmediatamente del bucle en el que se encuentra
 * cuando se cumple una condicion especifica. Una vex que se se encuetra la
 * sentencia break, la ejecucion del bucle se interrumpe y el control se pasa a la
 * primera linea de codigo despues del bucle
 */

 for($i = 0; $i < 10; $i++){
    if($i == 6){
        print"<h1> Bucle terminado </h1>";
        break;
    }else{
        print"<h1> $i </h1>";
    }
 }

 print '<hr>';

 /**continue:
  * la sentencia continue se utiliza para omitir el resto del codigo dentro del bucle
  *y continuar con la siguiente iteracion del bucle cuando se cumple una condicion
  *especifica. En lugar de salir completamente del bucle, como break, continue
  *simplemente pasa a la siguiente iteracion del bucle.
  */

  for($i = 0; $i < 10; $i++){
    if($i == 6){
        print"<h1> Se salto el numero 6</h1>";
        continue;
    }else{
        print"<h1> $i </h1>";
    }
 }
?>