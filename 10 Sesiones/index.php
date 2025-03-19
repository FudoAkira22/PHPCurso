<?php
// Inicia la sesión para poder utilizar variables de sesión
session_start();

// Verifica si existe la variable de sesión 'isLogin' y la almacena en la variable $sesion
// Si no existe, se le asigna 'false' por defecto
$sesion = isset($_SESSION['isLogin']) ? $_SESSION['isLogin'] : false;
?>

<?php
// Si la variable $sesion es falsa (es decir, el usuario no ha iniciado sesión), se muestra el formulario de inicio de sesión
if (!$sesion) {
?>
    <h1>Iniciar sesión</h1>
    <p>Las sesiones en PHP son una manera de almacenar información en el servidor
        para conservar los datos del usuario a través de múltiples páginas.
    </p>
    
    <!-- Formulario para iniciar sesión -->
    <form action="acceso.php" method="POST">
        <label for="user">Usuario:</label><br>
        <input type="text" name="user" id="user"><br>

        <label for="pass">Password:</label><br>
        <input type="password" name="pass" id="pass"><br>
        <br>

        <!-- Botón para enviar los datos -->
        <input type="submit" value="Ingresar">
    </form>

<?php
// Si la variable $sesion es verdadera (es decir, el usuario ya ha iniciado sesión), se muestra un mensaje y un enlace a la página privada
} else {
    print "Ya has iniciado sesión"; // Mensaje indicando que la sesión ya está activa
    print "<a href='privada.php'>Ir a la página privada</a>"; // Enlace a la página privada
}
?>
