<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de la Receta</title>
    <!-- EJERCICIO 315: PROCESAR IMAGEN DE RECETA -->
</head>

<body>
    <?php
        $carpetaDestino = __DIR__ . "/jpg"; // CARPETA DESTINO
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS DEL FORMULARIO
            $receta = trim($_POST["receta"] ?? "");
            $tipo = $_POST["tipo"] ?? "";
            $archivo = $_FILES["archivo"] ?? null;

            $errores = [];

            if ($receta == "") {
                $errores[] = "EL NOMBRE DE LA RECETA ES OBLIGATORIO";
            } elseif (strlen($receta) > 80) {
                $errores[] = "EL NOMBRE DE LA RECETA NO PUEDE SUPERAR LOS 80 CARACTERES";
            } // VALIDAR EL NOMBRE
        
            if ($tipo != "carne" && $tipo != "pescado" && $tipo != "fruta") {
                $errores[] = "DEBES SELECCIONAR UN TIPO DE RECETA VALIDO";
            } // VALIDAR LA CATEGORIA
        
            if (!$archivo || $archivo["error"] != UPLOAD_ERR_OK) {
                $errores[] = "DEBES SELECCIONAR UNA IMAGEN CORRECTAMENTE";
            } // VALIDAR LA IMAGEN
        
            if (!empty($errores)) {
                echo "<h2>ERRORES</h2>";
                echo "<ul>";

                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                } // MOSTRAR LOS ERRORES
        
                echo "</ul>";
            } else {
                $nombreArchivo = basename($archivo["name"]); // RECOGER EL NOMBRE DEL ARCHIVO
        
                if (!is_dir($carpetaDestino)) {
                    // CREAR LA CARPETA SI NO EXISTE
                    mkdir($carpetaDestino, 0777, true);
                } // COMPROBAR LA CARPETA DESTINO    
            
                $rutaDestino = $carpetaDestino . "/" . $nombreArchivo; // DEFINIR LA RUTA DEL ARCHIVO

                // MOVER LA IMAGEN A LA CARPETA JPG
                if (move_uploaded_file($archivo["tmp_name"], $rutaDestino)) {
                    echo "<h2>DATOS DE LA RECETA</h2>";
                    echo "<p><strong>Nombre de receta:</strong> " . htmlspecialchars($receta) . "</p>";
                    echo "<p><strong>Tipo de receta:</strong> " . htmlspecialchars($tipo) . "</p>";
                    echo "<p><strong>Imagen:</strong> " . htmlspecialchars($nombreArchivo) . "</p>";

                    // MOSTRAR LA IMAGEN SUBIDA
                    echo "<img src='jpg/" . rawurlencode($nombreArchivo) . "' alt='Foto de la receta' width='300'>";

                    echo "<p>IMAGEN SUBIDA CORRECTAMENTE A LA CARPETA /jpg</p>";
                } else {
                    echo "<p>NO SE PUDO SUBIR LA IMAGEN A LA CARPETA /jpg</p>";
                } // COMPROBAR SI SE HA SUBIDO LA IMAGEN
            } // MOSTRAR ERRORES O PROCESAR LA RECETA
        } else {
            echo "ACCESO NO PERMITIDO.";
        } // COMPROBAR EL METODO POST
    ?>

    <br>
    <a href="formulario.php">VOLVER AL FORMULARIO</a>
</body>
</html>