<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un formulario</title>
</head>
<body>
    <?php
    $user = $_GET['user'] ?? "Invitado";//Se trae la info dependiendo lo que se traiga de user en name 
    print "<h1> bienvenido ".$user."</h1>";
    ?>
    <form action="" method="GET"><!--Por el metodo mandamos la info por url tambien puede ser post-->
        <input type="text" name="user" id="user"><!--En php usamos name-->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
