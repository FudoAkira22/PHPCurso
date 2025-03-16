<h1>Listas de argumentos</h1>
<p>El operador de elipsis (...) en php se utiliza para indicar que una funcion puede 
    resivir un numeros variable de argumentos.
</p>
<?php 
//Antes de los ... podemos agregarle un tipo
function suma($simbolo,int ...$numeros){
    $total = 0;
    foreach($numeros as $numero){
        $total += $numero;
    }

    return $simbolo." ".$total;
}   

print suma("a",1,2,3,4,5,6,7,8,9,10);

print "<hr>";

function concatenar ($separador,...$elementos){
    return implode($separador,$elementos);
}

print concatenar(",","a","b","c","d","e");
?>