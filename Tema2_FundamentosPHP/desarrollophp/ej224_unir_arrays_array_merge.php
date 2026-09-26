<!DOCTYPE html>
<html lang="es">
<head>
    <!-- CREAR TRES ARRAYS:
        ARRAY1: 12, 34, 45, 52, 12
        ARRAY2: Lagartija, Araña, Perro, Gato, Ratón
        ARRAY3: Sauce, Pino, Naranjo, Chopo, Perro, 34

        UNIR LOS TRES ARRAYS EN UNO NUEVO Y MOSTRAR TODOS SUS ELEMENTOS CON SU POSICION -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unir arrays con array_merge</title>
</head>
<body>
    <h1>EJER 24: UNIR ARRAYS CON ARRAY_MERGE</h1>

    <?php
        // CREAR LOS TRES ARRAYS
        $array1 = [12,34,45,52,12];
        $array2 = ["Lagartija","Araña","Perro","Gato","Ratón"];
        $array3 = ["Sauce","Pino","Naranjo","Chopo","Perro","34"];

        // UNIR LOS TRES ARRAYS EN UNO NUEVO
        $resultado = array_merge($array1, $array2, $array3);
       
        for ($i = 0; $i < count($resultado); $i++) {
            echo "Elemento en la posición $i: " . $resultado[$i] . "<br>";
        } // RECORRER Y MOSTRAR EL ARRAY RESULTANTE
    ?>
</body>
</html>