<?php
print '<h2>El operador de fusion de null (tambien conocido como null coalesce) en php es
una caracteristica introducida en php 7 que simplifica la comprobacion de valores nulos o
indefinidos. Se representa mediante dos signos de interrogacion (??)</h2>';

//aqui se esta trallendo el valor de name pero como no tiene valor da error
//con los simbolos ?? le daremos un valor por defecto
//Actua como un if
$fullname = $_GET['name']??$_POST['name']??'Mysterious Person';
print $fullname;
?>