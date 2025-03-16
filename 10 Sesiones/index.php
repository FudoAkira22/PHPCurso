<h1>Iniciar sesion</h1>
<p>Las sesiones en php son una manera de almacenar informacion en el servidor
    para conservar los datos del ususario a traves de multiples paginas
</p>

<form action="acceso.php" method="POST">
    <label for="user">Usuario:</label><br>
    <input type="text" name="user" id="user"><br>
    <label for="pass">Password:</label><br>
    <input type="password" name="pass" id="pass"><br>
    <br>
    <input type="submit" value="Ingresar">
</form>