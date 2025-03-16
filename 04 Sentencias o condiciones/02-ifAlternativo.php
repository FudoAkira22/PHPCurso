<?php
$user = "Admin";
$isAdmin = true;

//Esta es una forma de hacer el if else no se recomienda
if($isAdmin) print"Bienvenido, $user Tienes acceso completo al sistema";
else print"$user no tines acceso";

print'<hr>';
//Esta es otra forma de hacer el if
$a = 25;
$b = 50;
if($a>$b):
    print"$a es mayor que $b";
elseif($a<$b):
    print"$a es menor que $b";
else:
    print"$a es igual que $b";
endif;
?>