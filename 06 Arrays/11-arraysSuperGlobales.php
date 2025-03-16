<h1>Las superglobales en php</h1>

<p>Son arreglos especiales que estan disponibles en todos los ambitos de tu script PHP.</p>

<p>Estas superglobales proporcionan informacion util sobre la solucion actual, el entorno del servidor, el sistema, etc.</p>

<p><b>$_GET:</b> Almacena los parametros basados en la URL.</p>


<p><b>$_POST:</b> Contiene datos enviados a traves de formularios HTML con el metodo POST</p>
<?php 

?>


<p><b>$_REQUEST:</b> Conbina los datos de $_GET, $_POST y $_COOKIE</p>


<p><b>$_COOKIE:</b> Alamcena cookies enviadas por el cliente</p>


<p><b>$_SESSION:</b> Mantiene datos de sesion en el servidor</p>


<p><b>$_SERVER:</b> Contiene informacion sobre los encabezados, rutas y ubicaciones del script</p>
<?php
//Obtener la direccion IP del cliente
$ipCliente = $_SERVER["REMOTE_ADDR"];
print $ipCliente."<br>";
//Obtener la informacion de el navegador del cliente o el agente de usuario del navegador
$agentUsuario = $_SERVER["HTTP_USER_AGENT"];
print $agentUsuario."<br>";
//Obtener el nombre del servidor
$nombreServidor = $_SERVER["SERVER_NAME"];
print $nombreServidor."<br>";
?>

<p><b>$_FILES:</b> Contiene informacion sobre archivos cargados a traves de un formulario</p>


<p><b>$_ENV:</b> Contiene las variables de ambiente del sistema operativo.</p>
<?php
//Obtener el nombre del usuario
$usuario = $_ENV["USER"];
print $usuario;
?>

