<?php
print "<h1>Operadores de incremento y decremento</h1>";
$a =1;
print '<p>Pre-incremento (++$a): incrementar el valor de  la variable $a en uno y luego
retornar el nuevo valor.</p>';
print ++$a;

print '<p>Post-incremento ($a++): Retorna el valor actual de la variable $a y luego
incrementa su valor en uno.</p>';
print $a++;//Este imprimira 2 pero en realidad vale 3
print '<p>'.$a.'</p>';

print '<p>Pre-decremento (--$a): Decrementar el valor de la variable $a en uno y luego
retornar el nuevo valor.</p>';
print --$a;

print '<p>Post-incremento ($a-): Retornar el valor actual de la varaible $a y luego
decrementar su valor en uno.</p>';
print $a--;//Este imprimira 2 pero en realidad vale 1
print '<p>'.$a.'</p>';
?>