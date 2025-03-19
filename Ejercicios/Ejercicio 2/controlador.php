<!--Meter un hola mundo en una estructura html-->
<!--agarrar cualquier imagen y pon un img con la ruta de la imagen con php-->
<!--Create un select en html y metele los numeros del 1 al 10 como opciones-->

<?php

include './index.php';
$nombre = $_POST['nombre'];
$img = 'img/1.jpg';
$num = $_POST['num'];
if(isset($_POST['enviar'])){
    print '<p>Hola '. $nombre. '</p>';
    print '<img src="'.$img.'" alt="">';
    echo '<h2>Hola mundo</h2>';
    print '<p>El numero que esecogieste fue'.$num.'</p>';
}

?>
