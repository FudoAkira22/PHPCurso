<h1>Crear arrays</h1>
<?php
//array vacio
$empy_array = array();//Este es un array vacio
//Array indexado
$index_array = array(1,2,3,4,5,true,'Hola mundo');
//Array asociativos
//Tiene una clave y un valor
$assoc_array = [
    'name'=>'Erick',
    'Last name' => 'Medina',
    'Age' => 23
];
//Iniciar un array vacio y agregar elementos
$dybamic_array = [];
$dybamic_array[] = 'Manzana';
$dybamic_array[] = 23;
$dybamic_array[] = false;
//Arrays multidimencionales
$multi_array =[
    ['apple','banaba','cherry'],
    ["red","green","blue"],
    [1,2,3]
];
?>