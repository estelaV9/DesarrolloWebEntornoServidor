<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 235: CREAR UN ARRAY MULTIDIMENSIONAL DE ESTUDIANTES Y MOSTRAR SUS DATOS RECORRIENDO SUS INDICES, CLAVES Y VALORES -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional de estudiantes</title>
</head>

<body>
    <h1>EJER 235: RECORRER ARRAY MULTIDIMENSIONAL DE ESTUDIANTES</h1>

    <?php   
        $estudiantes = [
            ["nombre" => "Ana", "curso" => "PHP"],
            ["nombre" => "Luis", "curso" => "JavaScript"]
        ]; // CREAR UN ARRAY CON LOS DATOS DE LOS ESTUDIANTES
    
        foreach ($estudiantes as $indice => $estudiante) {
            echo "Estudiante numero: " . $indice . "<br>";

            foreach ($estudiante as $clave => $valor) {
                echo $clave . ": " . $valor . "<br>";
            } // RECORRER LOS DATOS DE CADA ESTUDIANTE

            echo "-------------------<br>"; // SEPARAR LOS DATOS DE CADA ESTUDIANTE
        } // RECORRER EL ARRAY PRINCIPAL OBTENIENDO EL INDICE Y LOS DATOS DE CADA ESTUDIANTE
    ?>
</body>
</html>