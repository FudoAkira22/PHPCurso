<?php
/**for each:
 * La estructura de control foreach en PHP se utiliza para iterar sobre arrays o 
 * colecciones de elementos. Es especificamente util cuando necesitas recorrer todos
 * los elementos de un array sin preociparte por el indice de cada elemento
 */

$frutas = ['Manzana','Pera','Papaya','Sandia'];

//Este da el valor numerico de los arrays
 foreach ($frutas as $fruta => $frutas) {
    print "$fruta <br>";
 }

 print '<hr>';

 $frutas2 = ['Manzana','Pera','Papaya','Sandia'];
 //Este da cada uno de los valores
 foreach ($frutas2 as $fruta2) {
    print "$fruta2 <br>";
 }
?>