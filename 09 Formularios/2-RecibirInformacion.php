<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un formulario</title>
</head>
<body>
   <!--se debe de poner en el action a donde se van a mandar los datos-->
    <form action="proceso/proceso.php" method="GET"><!--Por el metodo mandamos la info por url tambien puede ser post-->
<!--input Nombre del usuario-->
        <label for="user">Nombre de usuiario:</label>
        <br>
        <input type="text" name="user" id="user"><!--En php usamos name-->
        <br>
<!--input correo del usuario-->
        <label for="email">Correo de usuiario:</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
<!--Select option idioma del usuario-->
        <label for="idioma">Idioma</label>
        <br>
        <select name="idioma" id="idioma">
            <option value="espanol">espanol</option>
            <option value="ingles">Ingles</option>
            <option value="aleman">Aleman</option>
        </select>
<!--Radio button estado civil-->
        <br>
        <label for="estado">Estado civil</label><br>
        <input type="radio" name="estado" id="soltero" value="soltero">
        <label for="soltero">Soltero</label><br>
        <input type="radio" name="estado" id="casado" value="casado">
        <label for="casado">Casado</label><br>
        <input type="radio" name="estado" id="viudo" value="viudo">
        <label for="viudo">Viudo</label><br>
<!--Text area-->
<label for="comentarios">Introduce tu comentario</label><br>
<textarea name="comentarios" id="comentarios" cols="20" rows="10"></textarea>
        <br>
<!--Checkbox-->
        <label>Pasatiempos:</label><br>
        <input type="checkbox" name="pasatiempos[]" id="leer" value="leer">
        <label for="leer">leer</label><br>
        <input type="checkbox" name="pasatiempos[]" id="correr" value="correr">
        <label for="correr">Correr</label><br>
        <input type="checkbox" name="pasatiempos[]" id="cantar" value="cantar">
        <label for="cantar">Cantar</label><br>
        <input type="checkbox" name="pasatiempos[]" id="jugar" value="jugar">
        <label for="jugar">Jugar</label><br>
        <input type="checkbox" name="pasatiempos[]" id="programar" value="programar">
        <label for="programar">Programar</label>
        <input type="hidden" name='token' value="<?php print uniqid();?>">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
