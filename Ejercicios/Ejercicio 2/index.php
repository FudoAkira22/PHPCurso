<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>


    <h1>Ejercicio 2</h1>

    <form action="controlador.php" method="POST">
        <label for="nombre">Esctibe tu nombre</label></br>
        <input type="text" name="nombre" id="nombre"></br>
        <select name="num" id="">
        <?php
        for($i = 1; $i <= 10; $i++){
            print '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
        </select>
        <button type="submit" name="enviar">Enviar</button></br>
    </form>
</body>
</html>