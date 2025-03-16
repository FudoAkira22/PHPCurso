<?php
session_start();

if($_SESSION['isLogin'] == false){
    header("location: index.php");
    exit;
}
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