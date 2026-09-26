<!DOCTYPE html>
<html lang="es">
<head>
    <!-- CREAR TRES ARRAYS:
        ARRAY1: 12, 34, 45, 52, 12
        ARRAY2: Lagartija, Araña, Perro, Gato, Ratón
        ARRAY3: Sauce, Pino, Naranjo, Chopo, Perro, 34

        CREAR UN CUARTO ARRAY VACIO Y AÑADIR TODOS LOS ELEMENTOS DE LOS TRES ARRAYS UTILIZANDO ARRAY_PUSH
        
        MOSTRAR EL ARRAY RESULTANTE -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unir arrays con array_push</title>
</head>
<body>
    <h1>EJER 25: UNIR ARRAYS CON ARRAY_PUSH</h1>

    <?php
        // CREAR LOS TRES ARRAYS
        $array1 = [12,34,45,52,12];
        $array2 = ["Lagartija","Araña","Perro","Gato","Ratón"];
        $array3 = ["Sauce","Pino","Naranjo","Chopo","Perro","34"];

        // CREAR ARRAY VACIO PARA GUARDAR TODOS LOS ELEMENTOS
        $resultado = [];
       
        for ($i = 0; $i < count($array1); $i++) {
            array_push($resultado, $array1[$i]);
        } // AÑADIR LOS ELEMENTOS DEL PRIMER ARRAY
       
        for ($i = 0; $i < count($array2); $i++) {
            array_push($resultado, $array2[$i]);
        } // AÑADIR LOS ELEMENTOS DEL SEGUNDO ARRAY
       
        for ($i = 0; $i < count($array3); $i++) {
            array_push($resultado, $array3[$i]);
        } // AÑADIR LOS ELEMENTOS DEL TERCER ARRAY
       
        var_dump($resultado); // MOSTRAR EL ARRAY COMPLETO

        
        /* for ($i = 0; $i < count($resultado); $i++) {
            echo "Elemento en la posicion $i: " . $resultado[$i] . "<br>";
        } // MOSTRAR LOS ELEMENTOS DEL ARRAY UNO POR UNO */
    ?>
</body>
</html>