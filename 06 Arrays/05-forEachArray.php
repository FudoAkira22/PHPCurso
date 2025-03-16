<h1>Recorrer arrays con for each</h1>
<?php
$fruits = ["Apple","Bananas","Oranges"];
foreach ($fruits as $key ) {
   print "$key <br>";
}
print "<hr>";
$personas = [
    'nombre'=>'Erick',
    'apellido'=>'Medina',
    'edad'=>'23'
];
foreach ($personas as $key => $persona) {
    print "$key : $persona <br>";
}
print "<hr>";
//Iteracion sobre un array multidimensional con for each
$users = array(
    array('name'=>'Erick','age'=>'23'),
    array('name'=>'David','age'=>'20'),
    array('name'=>'Gonzo','age'=>'65')
);

foreach ($users as $user) {
    foreach ($user as $key => $value) {
        print"$key : $value <br>";
        

    }
    print "<br>";
}
?>