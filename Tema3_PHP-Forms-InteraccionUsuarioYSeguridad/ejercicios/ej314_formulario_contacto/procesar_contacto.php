<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Contacto</title>
    <!-- EJERCICIO 314: PROCESAR FORMULARIO Y ARCHIVO ADJUNTO -->
</head>

<body>
    <?php
        $carpetaDestino = __DIR__ . "/varios"; // CARPETA DESTINO
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS DEL FORMULARIO
            $nombre = trim($_POST["nombre"] ?? "");
            $correo = trim($_POST["correo"] ?? "");
            $mensaje = trim($_POST["mensaje"] ?? "");

            // MOSTRAR LOS DATOS RECIBIDOS
            echo "<h2>DATOS RECIBIDOS DEL FORMULARIO</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Campo</th><th>Valor</th></tr>";
            echo "<tr><td>Nombre</td><td>" . htmlspecialchars($nombre) . "</td></tr>";
            echo "<tr><td>Correo Electronico</td><td>" . htmlspecialchars($correo) . "</td></tr>";
            echo "<tr><td>Mensaje</td><td>" . nl2br(htmlspecialchars($mensaje)) . "</td></tr>";
            echo "</table>";

            // COMPROBAR SI SE HA RECIBIDO UN ARCHIVO
            echo "<h2>ARCHIVO ADJUNTO</h2>";
            if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
                // RECOGER LOS DATOS DEL ARCHIVO
                $archivo = $_FILES["archivo"];
                $nombreArchivo = basename($archivo["name"]);
                $tipoArchivo = $archivo["type"];
                $tamanoArchivo = $archivo["size"];

                // MOSTRAR LOS DATOS DEL ARCHIVO
                echo "<table border='1'>";
                echo "<tr><th>Propiedad</th><th>Valor</th></tr>";
                echo "<tr><td>Nombre</td><td>" . htmlspecialchars($nombreArchivo) . "</td></tr>";
                echo "<tr><td>Tipo</td><td>" . htmlspecialchars($tipoArchivo) . "</td></tr>";
                echo "<tr><td>Tamano</td><td>" . htmlspecialchars($tamanoArchivo) . " bytes</td></tr>";
                echo "</table>";

                if (!is_dir($carpetaDestino)) {
                    // CREAR LA CARPETA SI NO EXISTE
                    mkdir($carpetaDestino, 0777, true);
                } // COMPROBAR LA CARPETA DESTINO
        
                // DEFINIR LA RUTA DONDE SE GUARDARA EL ARCHIVO
                $rutaDestino = $carpetaDestino . "/" . $nombreArchivo;

                if (move_uploaded_file($archivo["tmp_name"], $rutaDestino)) {
                    echo "<p>ARCHIVO SUBIDO CORRECTAMENTE A LA CARPETA /varios: " . htmlspecialchars($nombreArchivo) . "</p>";
                } else {
                    echo "<p>NO SE PUDO SUBIR EL ARCHIVO A LA CARPETA /varios</p>";
                } // COMPROBAR SI SE HA MOVIDO EL ARCHIVO
            } elseif (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == UPLOAD_ERR_NO_FILE) {
                echo "<p>NO SE HA SELECCIONADO NINGUN ARCHIVO ADJUNTO</p>";
            } else {
                echo "<p>SE HA PRODUCIDO UN ERROR AL SUBIR EL ARCHIVO</p>";
            } // COMPROBAR EL ARCHIVO ADJUNTO
        } else {
            echo "ACCESO NO PERMITIDO.";
        } // COMPROBAR EL METODO POST
    ?>
    <br>
    <a href="formulario.php">VOLVER AL FORMULARIO</a>
</body>
</html>