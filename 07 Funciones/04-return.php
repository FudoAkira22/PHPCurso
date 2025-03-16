<h1>Devolvver un valor con return</h1>
<p>En php, la palabra reservada return se usa para filaziara
    la ejecucion de una funcion y opcionalmente devolver un valor
</p>

<?php
function suma ($a,$b){
    return $a + $b;//solo devuelve un valor
}
print suma(10,11);


//Esto devuelve arrays
function resta($f,$c){
    $result = $f - $c;
    return [$result,1,"hola"];
}
$elemets = resta(2,2);
print "<br>".$elemets[0]."<br>";


//
$algoDalioMal = true;
function hazAlgo($algoDalioMal){
    if($algoDalioMal){
        print "Todo mal";
        
        return;
    }
    print "Todo bien";
    return;
}
print "<br>".hazAlgo($algoDalioMal);
?>