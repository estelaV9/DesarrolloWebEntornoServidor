<!DOCTYPE html>
<html lang="es">
<head>
    <!-- RECORRER UN ARRAY DE CIUDADES Y MOSTRAR POR PANTALLA
        EL INDICE Y EL NOMBRE DE CADA CIUDAD.
        
        CIUDADES:
            Madrid
            Barcelona
            Londres
            New York
            Los Ángeles
            Chicago -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorrer array de ciudades</title>
</head>
<body>
    <h1>EJER 22: RECORRER ARRAY DE CIUDADES</h1>

    <?php
        // CREAR ARRAY DE CIUDADES
        $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
       
        foreach ($ciudades as $indice => $valor) {
            echo "La ciudad con el indice: $indice tiene el nombre de $valor.<br></br>";
        } // RECORRER EL ARRAY MOSTRANDO EL INDICE Y EL VALOR
    ?>
</body>
</html>