<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <p>teniendo dos input de type number,
        recogelos via post, sumalos y
        muestra el reslutado</p>

        <form action="./controlador.php" method="POST">
            <label for="num1">Introduce tu primer numero</label>
            <input type="number" name="num1" id="num1" >
            <br>
            <label for="num2">Introduce tu segundo numero</label>
            <input type="number" name="num2" id="num2" >

       
        <input type="submit" value="C">
        <button type="submit" name="sumar">Sumar</button>
        <button type="submit" name="restar">Restar</button>
        </form>

</body>

</html>