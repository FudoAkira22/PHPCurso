<?php
session_start();//Siempre se pone al inicio
$user = $_POST['user'] ?? null;
$pass = $_POST['pass'] ?? null;

/*Compara que el inisio de sesion tenga estos datos */
if($user == "admin" && $pass == 1234){
    $_SESSION['isLogin'] = true;
    print "Bienvenido al sistema, $user<br>";
    print "<a href='privada.php'>Ir a pagina privada</a>";
}else{/*Si no son correctos manda esto */
    print "Datos de ingreso incorrectos<br>";
}
?>