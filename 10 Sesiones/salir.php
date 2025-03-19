<?php
session_start();

if(isset($_SESSION['isLogin'])){/**revisa si hay una sesion */
    session_destroy();/*Si la hay la cierra o la destruye */
    unset($_SESSION['isLogin']);/*php borra la variable de la memoria */
    print "Haz cerrado sesion correctamente <br>";
    
    /*header("location: index.php");Con esto lo redirige 
    lo puedes usar para que redirija la pagina al index cuando se cierre
    exit;*/
}else{
    print "No haz iniciado sesion";
}
print "<br> <a href='index.php'>Regresar al inicio</a>";
?>

