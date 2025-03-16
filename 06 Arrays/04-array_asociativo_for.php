
<h1>Recorrer arrays asociativo con for</h1>
<?php

$assoc_array = [
    'name'=>'Erick',
    'Last name' => 'Medina',
    'Age' => 23
];

$keys = array_keys($assoc_array);
var_dump($keys);
$length = count($assoc_array);

for($i = 0; $i < $length; $i++){
    $key = $keys[$i];
    print "<br>$key : $assoc_array[$key]";
}
?>