<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 307: MOSTRAR UN TEXTO CON LOS ESTILOS ELEGIDOS POR EL USUARIO -->
    <title>Resultado del texto</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS ENVIADOS DESDE EL FORMULARIO
            $texto = trim($_POST['texto'] ?? '');
            $tamanio = $_POST['tamanio'] ?? '';
            $color = $_POST['color'] ?? '#e66465';
            $tipoletra = $_POST['tipoletra'] ?? 'sans-serif';

            // COMPROBAR QUE EL TEXTO NO ESTE VACIO
            if ($texto == '') {
                echo "Error: Debe introducir un texto.";
            } elseif (!is_numeric($tamanio) || $tamanio < 1 || $tamanio > 100) {
                echo "Error: El tamaño debe ser un numero entre 1 y 100.";
            } elseif (
                $tipoletra != 'sans-serif' &&
                $tipoletra != 'serif' &&
                $tipoletra != 'monospace' &&
                $tipoletra != 'cursive'
            ) {
                echo "Error: El tipo de letra seleccionado no es valido.";
            } elseif (strlen($color) != 7 || substr($color, 0, 1) != '#') {
                echo "Error: El color seleccionado no es valido.";
            } else {
                // MOSTRAR LA LISTA DE DATOS ELEGIDOS POR EL USUARIO
                echo "<h2>DATOS ELEGIDOS:</h2>";
                echo "<ul>";
                echo "<li><strong>Texto introducido:</strong> " . htmlspecialchars($texto) . "</li>";
                echo "<li><strong>Tamaño introducido:</strong> " . htmlspecialchars($tamanio) . "px</li>";
                echo "<li><strong>Color introducido:</strong> " . htmlspecialchars($color) . "</li>";
                echo "<li><strong>Tipo de letra introducido:</strong> " . htmlspecialchars($tipoletra) . "</li>";
                echo "</ul>";

                echo "<hr>";

                // MOSTRAR EL PARRAFO APLICANDO LOS ESTILOS CSS ELEGIDOS
                echo "<h2>RESULTADO FINAL:</h2>";
                echo "<p style='font-size: " . (int) $tamanio . "px; color: " . htmlspecialchars($color) . "; font-family: " . htmlspecialchars($tipoletra) . ";'>";
                echo htmlspecialchars($texto);
                echo "</p>";
            } // COMPROBAR QUE LOS DATOS INTRODUCIDOS SEAN VALIDOS
        } else {
            echo "Acceso denegado.";
        } // COMPROBAR SI LOS DATOS FUERON ENVIADOS MEDIANTE EL METODO POST
        
        // ENLACE PARA VOLVER AL FORMULARIO
        echo "<br><a href='index.php'>Volver al formulario</a>";
    ?>
</body>
</html>