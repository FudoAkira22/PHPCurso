

<!--Estas son algunas formas de mostrar datos en php-->
<?php 
echo "Hola mundo desde php";
?>
<h1>Hola mundo</h1>
<h1><?php 
echo "Hola mundo desde php";
?></h1>
<?php echo"<h1>Hola mundo</h1>"; ?>
<!--Esta es una forma de dar salto de linea-->
<?php 
echo "Salto de linea\n<br>";
print"Salto de linea \n";
?>

<!--Esto muestra informacion como cuando se ejecuto y en donde etc-->
<?php 
echo phpinfo();
?>