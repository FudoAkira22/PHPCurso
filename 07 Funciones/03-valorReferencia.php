<h1>Parametro por valor y refencia</h1>
<p>parametros por valor: se crea una copia de valor de la variable
    y se pasa esa copia a la funcion.
</p>

<p>
    Parametro por referencia:
    Estamos pasando la direccion de memoria de la variable en
    lugare de una copia de su valor
</p>

<?php
function duplicar(&$num){
    $num = $num * 2;
    print "Numero multiplicado por 2 = ".$num."<br>";
}

$num1 = 10;
duplicar($num1);//El & hace que se modifique desde aqui con la funcion
print "numero si multiplicar = ".$num1;
?>