<h1>Acceder a los arrays</h1>
<?php

$index_array = ["Manzana","Durazno","Nranja",1,true];
echo $index_array[0];//Depende el numero que apresca en [] es el que tarera
//En este caso entrara a manzana
echo '<br>'.$index_array[4];

print "<hr>";
//Array asociativo
$assoc_array=[
    'name'=>'Erick',
    'lastName'=> 'Medina',
    'edad'=>24
];
print '<p> mi nombre es '.$assoc_array['name'].'</p>';
print '<p> mi apellido es '.$assoc_array['lastName'].'</p>';
print '<p> mi edad es '.$assoc_array['edad'].'</p>';
print '<p>Hola mi nombre es '.$assoc_array['name'].' y mi edad es '.$assoc_array['edad'].' y mi apellido es'.$assoc_array['lastName'].'</p>';

print "<hr>";
//Array multidimensional
$multi_array = [
["Apple","Bananna","cherry"],//[0][0] = apple, [0][1] = banana,[0][2] = cherry 
["red","green","blue"],//[1][0]==red
[1,2,3]//[2][0]
];

print "[0][0] = ".$multi_array[0][0].'<br>';
print "[0][1] = ".$multi_array[0][1].'<br>';
print "[0][2] = ".$multi_array[0][2].'<br>';

print "[1][0] = ".$multi_array[1][0].'<br>';
print "[1][1] = ".$multi_array[1][1].'<br>';
print "[1][2] = ".$multi_array[1][2].'<br>';

print "[2][0] = ".$multi_array[2][0].'<br>';
print "[2][1] = ".$multi_array[2][1].'<br>';
print "[2][2] = ".$multi_array[2][2].'<br>';
?>