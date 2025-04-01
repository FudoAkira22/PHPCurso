<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área</title>

    <script>
        // Función para ocultar los campos no necesarios según la figura seleccionada
        function mostrarCampos(){
            // Obtener los valores del radio button
            const figura = document.querySelector('input[name="figura"]:checked');

            // Ocultar todos los campos
            document.getElementById("campoBase").style.display = "none";
            document.getElementById("campoAltura").style.display = "none";
            document.getElementById("campoRadio").style.display = "none";
            document.getElementById("campoLado").style.display = "none";

            // Mostrar los campos según la figura seleccionada
            if (figura) {
                if (figura.value === "triangulo") {
                    document.getElementById("campoBase").style.display = "block";
                    document.getElementById("campoAltura").style.display = "block";
                } else if (figura.value === "circulo") {
                    document.getElementById("campoRadio").style.display = "block";
                } else if (figura.value === "cuadrado") {
                    document.getElementById("campoLado").style.display = "block";
                }
            }
        }

        // Ejecutar al cargar la página
        window.onload = mostrarCampos;
    </script>
</head>
<body>
    <h1>Calculadora de Área</h1>
    <p>Introduzca los campos necesarios para la figura que necesita</p>
    
    <form action="controlador.php" method="POST">
        <!-- Campo base (ocultado por defecto) -->
        <div id="campoBase" style="display: none;">
            <label for="base">Introduzca la base</label><br>
            <input type="number" id="base" name="base" step="any" min="0"><br>
        </div>

        <!-- Campo altura (ocultado por defecto) -->
        <div id="campoAltura" style="display: none;">
            <label for="altura">Introduzca la altura</label><br>
            <input type="number" id="altura" name="altura" step="any" min="0"><br>
        </div>

        <!-- Campo radio (ocultado por defecto) -->
        <div id="campoRadio" style="display: none;">
            <label for="radio">Introduzca el radio</label><br>
            <input type="number" id="radio" name="radio" step="any" min="0"><br>
        </div>

        <!-- Campo lado (ocultado por defecto) -->
        <div id="campoLado" style="display: none;">
            <label for="lado">Introduzca un lado</label><br>
            <input type="number" id="lado" name="lado" step="any" min="0"><br>
        </div>

        <fieldset>
            <legend>Seleccione la figura:</legend>
            <input type="radio" id="triangulo" value="triangulo" name="figura" onchange="mostrarCampos()">
            <label for="triangulo">Triángulo</label>
            <input type="radio" id="circulo" value="circulo" name="figura" onchange="mostrarCampos()">
            <label for="circulo">Círculo</label>
            <input type="radio" id="cuadrado" value="cuadrado" name="figura" onchange="mostrarCampos()">
            <label for="cuadrado">Cuadrado</label>
        </fieldset>
        
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
