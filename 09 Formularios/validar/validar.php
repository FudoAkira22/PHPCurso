<?php
$error = []; 
// Se inicializa un arreglo vacío llamado $error, que almacenará los mensajes de error.

function vacio(array $datos){ 
    global $error;
    // Se define una función llamada vacio que recibe un arreglo asociativo $datos como parámetro.
    foreach($datos as $key => $value){ 
        // Se recorre cada elemento del arreglo asociativo. $key es la clave y $value el valor.
        if(empty($value)){ 
            // Se verifica si el valor está vacío.
            array_push($error, "$key error, el campo no puede estar vacio."); 
            // Si está vacío, se agrega un mensaje de error al arreglo $error.
        }
    }
}
// Nota: $error no es accesible dentro de la función debido a su ámbito (scope).

function text_input($dato){ 
    // Se define una función llamada text_input que limpia un dato recibido.
    $dato = $dato ?? ''; 
    // Se asegura que $dato no sea nulo. Si lo es, se le asigna una cadena vacía.
    $dato = trim($dato);
    // Elimina espacios en blanco al inicio y al final de la cadena.
    $dato = stripslashes($dato); 
    // Elimina las barras invertidas (\) de la cadena.
    $dato = htmlspecialchars($dato); 
    // Convierte caracteres especiales en entidades HTML para evitar inyección de código (como "<" y "&").
    return $dato; 
    // Devuelve la cadena procesada y limpia.
}

?>