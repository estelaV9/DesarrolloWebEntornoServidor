<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 301: COMPROBAR LOS DATOS RECIBIDOS, VALIDAR EL NOMBRE Y MOSTRAR UN SALUDO -->
    <title>Procesar formulario</title>
</head>

<body>
    <h1>EJER 301: PROCESAR FORMULARIO</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nombre"])) {               
                if (empty(trim($_POST["nombre"])) == false) {
                    // LIMPIAR LOS ESPACIOS SOBRANTES Y ESCAPAR CARACTERES HTML
                    $nombre = htmlspecialchars(trim($_POST["nombre"]));

                    // MOSTRAR EL SALUDO CON EL NOMBRE INT  RODUCIDO
                    echo "¡Hola, " . $nombre . "!";
                } else {
                    // MOSTRAR UN MENSAJE SI EL NOMBRE ESTA VACIO
                    echo "Nombre vacio.";
                } // COMPROBAR QUE EL NOMBRE NO ESTE VACIO
            } else {
                // MOSTRAR UN MENSAJE SI NO SE HA ENVIADO EL CAMPO
                echo "No se ha recibido el nombre.";
            } // COMPROBAR SI SE HA ENVIADO EL CAMPO nombre
        } else {
            // MOSTRAR UN MENSAJE SI NO SE HA ENVIADO EL FORMULARIO MEDIANTE POST
            echo "No se han enviado datos.";
        } // COMPROBAR SI EL FORMULARIO SE HA ENVIADO MEDIANTE POST
    ?>

    <!-- ENLACE PARA VOLVER AL FORMULARIO -->
    <br><br>
    <a href="index.php">Volver</a>
</body>
</html>