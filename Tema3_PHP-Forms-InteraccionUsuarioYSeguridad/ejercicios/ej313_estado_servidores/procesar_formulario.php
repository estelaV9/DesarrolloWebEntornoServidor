<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del panel</title>
    <!-- EJERCICIO 313: PROCESAR EL ESTADO DE LOS SERVIDORES -->
</head>

<body>
    <h1>Panel de estado de almacenamiento</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS DEL FORMULARIO
            $codigo = trim($_POST["codigo"] ?? "");
            $reporte = $_POST["reporte"] ?? "";
        
            $servidores = [
                "Servidor Web" => "45%",
                "Base de Datos" => "88%",
                "Servidor Cloud" => "12%",
                "Backup" => "95%"
            ]; // ARRAY ASOCIATIVO CON EL ESTADO DE LOS SERVIDORES
            
            $errores = []; // VALIDAR LOS DATOS

            if ($codigo == "") $errores[] = "EL CODIGO DEL TECNICO ES OBLIGATORIO"; // VALIDAR EL CODIGO
        
            if ($reporte != "tabla" && $reporte != "lista") $errores[] = "DEBE SELECCIONAR UN FORMATO DE REPORTE VALIDO"; // VALIDAR EL FORMATO
        
            if (!empty($errores)) {
                echo "<h2>ERRORES</h2>";
                echo "<ul>";

                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                } // MOSTRAR LOS ERRORES
        
                echo "</ul>";
            } else {
                // MOSTRAR EL CODIGO DEL TECNICO
                echo "<h2>CODIGO DEL TECNICO: " . htmlspecialchars($codigo) . "</h2>";

                // MOSTRAR EL REPORTE EN FORMATO DE TABLA
                if ($reporte == "tabla") {
                    echo "<h3>Tabla de Control</h3>";
                    echo "<table border='1'>";
                    echo "<thead>";
                    echo "<tr><th>Servidor</th><th>Porcentaje de uso</th></tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    foreach ($servidores as $clave => $valor) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($clave) . "</td>";
                        echo "<td>" . htmlspecialchars($valor) . "</td>";
                        echo "</tr>";
                    } // CREAR UNA FILA POR CADA SERVIDOR
        
                    echo "</tbody>";
                    echo "</table>";
                } elseif ($reporte == "lista") {
                    // MOSTRAR EL REPORTE EN FORMATO DE LISTA
                    echo "<h3>Lista de Estado</h3>";
                    echo "<ul>";

                    foreach ($servidores as $clave => $valor) {
                        echo "<li><strong>" . htmlspecialchars($clave) . "</strong> actualmente al " . htmlspecialchars($valor) . " de capacidad</li>";
                    } // CREAR UN ELEMENTO POR CADA SERVIDOR
        
                    echo "</ul>";
                } // MOSTRAR EL FORMATO SELECCIONADO
            } // MOSTRAR ERRORES O RESULTADOS
        } else {
            echo "ACCESO NO PERMITIDO.";
        } // COMPROBAR EL METODO POST
        
        // MOSTRAR UN ENLACE PARA VOLVER AL FORMULARIO
        echo "<br><a href='formulario.php'>VOLVER AL FORMULARIO</a>";
    ?>
</body>
</html>