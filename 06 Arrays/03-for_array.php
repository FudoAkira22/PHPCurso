<h1>Recorrer arrays</h1>

<?php
$index_array = ["Manzana","Durazno","Naranja"];
//$length = count($index_array); da el numero de datos en el array


for($i = 0;$i < $length = count($index_array); $i++){
    print "$i = $index_array[$i] <br>";//Se recorre dependiendo el valor de $i
}
?>