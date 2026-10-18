<?php
    // ARRAY INDEXADO CON LOS REGALOS
    $regalos = ["Mochila", "Libreta", "Bolígrafo"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro promocional</title>
    <!-- EJERCICIO 311: FORMULARIO DE REGISTRO PROMOCIONAL -->
</head>
<body>
    <h2>FORMULARIO DE REGISTRO PROMOCIONAL</h2>
    <!-- FORMULARIO EN LA MISMA PAGINA -->
    <form action="" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required> <br><br>

        <label>¿Eres estudiante?</label><br>
        <input type="radio" name="estudiante" id="si" value="Si" required>
        <label for="si">Sí</label>
        <input type="radio" name="estudiante" id="no" value="No" required>
        <label for="no">No</label> <br><br>
        
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // RECOGER LOS DATOS DEL FORMULARIO
        $nombre = trim($_POST['nombre'] ?? '');
        $estudiante = $_POST['estudiante'] ?? '';

        echo "<hr>";

        if ($estudiante == "Si") {
            echo "<h3>RESULTADO</h3>";
            echo "<p>Felicidades " . htmlspecialchars($nombre) . " te ha tocado ";

            foreach ($regalos as $i => $regalo) {
                if ($i == 0) {
                    echo $regalo;
                } elseif ($i == count($regalos) - 1) {
                    echo " y " . $regalo;
                } else {
                    echo ", " . $regalo;
                } // MOSTRAR LOS REGALOS CON SEPARADORES
            } // RECORRER EL ARRAY
            echo "</p>";
        } else {
            echo "<h3>RESULTADO</h3>";
            echo "<p>Gracias por registrarte, la promoción es solo para estudiantes</p>";
        } // COMPROBAR SI ES ESTUDIANTE
    } // PROCESAR EL FORMULARIO
    ?>
</body>
</html>