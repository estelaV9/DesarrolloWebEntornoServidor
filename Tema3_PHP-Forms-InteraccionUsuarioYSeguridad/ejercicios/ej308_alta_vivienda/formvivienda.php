<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 308: VALIDAR LOS DATOS Y MOSTRAR EL RESUMEN DE LA VIVIENDA -->
    <title>Resumen de vivienda</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGIDA DE DATOS
            $vivienda = $_POST['vivienda'] ?? '';
            $zona = $_POST['zona'] ?? '';
            $direccion = trim($_POST['direccion'] ?? '');
            $habitaciones = $_POST['habitaciones'] ?? 'NO ESPECIFICADO';
            $precio = trim($_POST['precio'] ?? '');
            $tamano = trim($_POST['tamano'] ?? '');
            $observaciones = trim($_POST['observaciones'] ?? '');
           
            $extras = []; // RECOGIDA DE EXTRAS (CHECKBOXES)

            if (isset($_POST['Garaje'])) $extras[] = $_POST['Garaje']; // COMPROBAR SI SE HA SELECCIONADO GARAJE
        
            if (isset($_POST['Trastero'])) $extras[] = $_POST['Trastero']; // COMPROBAR SI SE HA SELECCIONADO TRASTERO
        
            if (isset($_POST['Piscina'])) $extras[] = $_POST['Piscina']; // COMPROBAR SI SE HA SELECCIONADO PISCINA
           
            $errores = []; // ARRAY PARA ALMACENAR ERRORES

            if ($vivienda != 'adosado' && $vivienda != 'unifamiliar' && $vivienda != 'piso') {
                $errores[] = "EL TIPO DE VIVIENDA ES OBLIGATORIO.";
            } // VALIDAR EL TIPO DE VIVIENDA
        
            if ($precio == '') {
                $errores[] = "EL PRECIO ES OBLIGATORIO.";
            } elseif (!is_numeric($precio) || $precio <= 0) {
                $errores[] = "EL PRECIO DEBE SER UN NUMERO MAYOR QUE CERO.";
            } // VALIDAR EL PRECIO
        
            // MOSTRAR ERRORES SI EXISTE ALGUNO
            if (count($errores) > 0) {
                echo "<h2>ERRORES EN EL FORMULARIO:</h2>";
                echo "<ul style='color: red;'>";

                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                } // MOSTRAR CADA ERROR
        
                echo "</ul>";
                echo "<a href='altavivienda.php'>VOLVER AL FORMULARIO</a>";
            } else {
                // SI LA VALIDACION ES CORRECTA, MOSTRAR EL RESUMEN
                echo "<h2>RESUMEN DEL ALTA DE VIVIENDA</h2>";
                echo "<p><strong>TIPO DE VIVIENDA:</strong> " . htmlspecialchars($vivienda) . "</p>";
                echo "<p><strong>ZONA:</strong> " . htmlspecialchars($zona) . "</p>";
                echo "<p><strong>DIRECCION:</strong> " . ($direccion != '' ? htmlspecialchars($direccion) : 'NO ESPECIFICADA') . "</p>";
                echo "<p><strong>NUMERO DE HABITACIONES:</strong> " . htmlspecialchars($habitaciones) . "</p>";
                echo "<p><strong>PRECIO:</strong> " . htmlspecialchars($precio) . " €</p>";
                echo "<p><strong>TAMAÑO:</strong> " . ($tamano != '' ? htmlspecialchars($tamano) . " M2" : 'NO ESPECIFICADO') . "</p>";

                // MOSTRAR EXTRAS SELECCIONADOS
                echo "<p><strong>EXTRAS:</strong> ";
                echo count($extras) > 0 ? htmlspecialchars(implode(", ", $extras)) : "NINGUNO";
                echo "</p>";

                // MOSTRAR OBSERVACIONES
                echo "<p><strong>OBSERVACIONES:</strong> " . ($observaciones != '' ? htmlspecialchars($observaciones) : 'SIN OBSERVACIONES') . "</p>";
            } // MOSTRAR ERRORES O RESUMEN DE DATOS
        } else {
            echo "ACCESO NO PERMITIDO.";
        } // COMPROBAR SI LOS DATOS FUERON ENVIADOS POR POST
        
        echo "<br><a href='altavivienda.php'>VOLVER AL FORMULARIO</a>";
    ?>
</body>
</html>