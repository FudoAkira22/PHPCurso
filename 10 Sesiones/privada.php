<?php
session_start();/*Se vuelve a colocar esto */

/*Si dise false me direccionar a index */
if($_SESSION['isLogin'] == false){
    header("location: index.php");/*Con esto lo redirige */
    exit;/*Con este se termina el codigo */
}
/*Si es true mostrara esto */
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion privada</title>
</head>
<body>
    <h1>Informacion secreta</h1>
    <a href="index.php">Ir al inicio</a>
    <a href="salir.php">salir</a>
</body>
</html>