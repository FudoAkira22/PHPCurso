<?php
session_start();//Siempre se pone al inicio
$user = $_POST['user'] ?? null;
$pass = $_POST['pass'] ?? null;

if($user == "admin" && $pass == 1234){
    $_SESSION['isLogin'] = true;
    print "Bienvenido al sistema, $user<br>";
    print "<a href='privada.php'>Ir a pagina privada</a>";
}else{
    print "Datos de ingreso incorrectos<br>";
}
?>