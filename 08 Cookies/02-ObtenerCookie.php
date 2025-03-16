<h1>Leer cookie</h1>
<?php
//isset comprueba si esta definida una variable y si no es nula 
$miCookie = isset($_COOKIE['MiCookie']) ? $_COOKIE['MiCookie']:false;

if($miCookie){
    print $miCookie;
    $data = explode("|",$miCookie);
    print var_dump($data);
}

?>