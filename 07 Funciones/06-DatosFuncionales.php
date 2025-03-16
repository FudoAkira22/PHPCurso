<?php
//Esto indica que los datos que se manden a la funcion seran
//estrictos y aunaque sean numero en string deben ser numeros en 
//enteros asi 2 y no '2' solo apartir de php7
declare(strict_types = 1);
?>
<h1>Declarar los tipos de datos</h1>
<?php
//el int que esta despues de : indica el tipo de dato que deve de devolver la funcion
//en este caso sera entero
    function suma(int $a,int $b):int{
        return $a + $b;
    }

    print var_dump(suma(2,2));


    class Gato{}
    function devolverGato():Gato{
        return new Gato();
    }
    print var_dump(devolverGato());
?>