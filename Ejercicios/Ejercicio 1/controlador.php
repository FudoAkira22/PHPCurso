<?php
include "./index.php"; /*Este conecta con el index*/

        $num1 = intval($_POST['num1']) ?? 0;/*Si no tiene un numero pone 0 por defecto*/
        $num2 = intval($_POST['num2']) ?? 0;
        

        /*Funcion sumar*/
        function sumar($num1 , $num2 ){
            return $num1 + $num2; 
        }
        /*Funcion Restar*/
        function resta($num1 , $num2 ){
            return $num1 - $num2; 
        }

        /*compara que boton se preciono*/
        if (isset($_POST['sumar'])) {
            print "<p>El resultado de su suma es = " . sumar($num1, $num2) . "</p>";
        } else if (isset($_POST['restar'])) {
            print "<p>El resultado de su resta es = " . resta($num1, $num2) . "</p>";
        } else {
            print "<p>Introduzca los números</p>";
        }
?>

