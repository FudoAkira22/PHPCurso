<h1>Argumentos opcionales y obligatorios</h1>

<?php
//se declara primero el argumento obligatorio
//Se declara despues los opcionales con un valor por defecto
function costo($precio,$sabor = "Manzana"){
    print "Su precio es de ".$precio." y el sabor es de "."$sabor";
}
costo(100);

function  conArray($costo, $sabores = ["Limon","Piña"]){
    //implode recorre el array
    return "El costo es de ".$costo." y sus sabores son de ".implode(' con ',$sabores);
}
print "<br> ". conArray(100);
?>