<!DOCTYPE html>
<html lang="es">
<head>
    <!-- CREAR UN ARRAY CON LOS SIGUIENTES ELEMENTOS:
        Lagartija, Araña, Perro, Gato, Ratón
        
        AÑADIR EL ELEMENTO "Periquito" AL FINAL DEL ARRAY - MOSTRAR EL ARRAY
        
        ELIMINAR EL ELEMENTO QUE SE ENCUENTRA EN EL INDICE 1 - MOSTRAR DE NUEVO EL ARRAY -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir y eliminar elementos de un array</title>
</head>
<body>
    <h1>EJER 26: AÑADIR Y ELIMINAR ELEMENTOS DE UN ARRAY</h1>

    <?php       
        $array = ["Lagartija","Araña","Perro","Gato","Ratón"]; // CREAR ARRAY

        // AÑADIR "PERIQUITO" AL FINAL DEL ARRAY
        array_push($array, "Periquito");

        // MOSTRAR EL ARRAY DESPUES DE AÑADIR EL ELEMENTO
        var_dump($array);

        // ELIMINAR EL ELEMENTO CON INDICE 1
        unset($array[1]);

        // MOSTRAR EL ARRAY DESPUES DE ELIMINAR EL ELEMENTO
        var_dump($array);
    ?>
</body>
</html>