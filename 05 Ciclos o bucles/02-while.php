<?php
/**
 * while(condicion que se repetira hasta que sea verdadera){
 * acciones a ejectutar si es verdader
 * }
 */
$i = 0;
while($i <= 10){
print "</p>$i</p>";
if($i ===  10){
    break;
}else{
    $i++;
}
}
while($i >= 1){
    print "</p>$i</p>";
    --$i;
    }
?>