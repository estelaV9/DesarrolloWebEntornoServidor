<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 302: RECIBIR, COMPROBAR Y MOSTRAR LOS DATOS ENVIADOS MEDIANTE GET O POST -->
    <title>Procesar formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Datos del formulario</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" || $_SERVER["REQUEST_METHOD"] == "POST") {           
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $datos = $_GET;
                echo "<p>Metodo utilizado: GET</p>";
            } else {
                $datos = $_POST;
                echo "<p>Metodo utilizado: POST</p>";
            } // SELECCIONAR EL ARRAY QUE CONTIENE LOS DATOS RECIBIDOS

            $campos = [
                "nombre" => "Nombre",
                "apellidos" => "Apellidos",
                "email" => "Correo electronico",
                "pais" => "Pais",
                "mensaje" => "Mensaje"
            ]; // DEFINIR LOS CAMPOS QUE SE VAN A MOSTRAR

            foreach ($campos as $clave => $etiqueta) {               
                if (isset($datos[$clave])) {
                    // ELIMINAR ESPACIOS SOBRANTES Y PROTEGER LA SALIDA HTML
                    $valor = trim($datos[$clave]);
                    $valor = htmlspecialchars($valor, ENT_QUOTES, "UTF-8");
                   
                    if ($valor != "") {
                        echo "<p><b>" . $etiqueta . ":</b> " . nl2br($valor) . "</p>";
                    } else {
                        echo "<p><b>" . $etiqueta . ":</b> Vacio</p>";
                    } // MOSTRAR EL VALOR O INDICAR QUE ESTA VACIO

                } else {
                    // INDICAR SI EL CAMPO NO SE HA RECIBIDO
                    echo "<p><b>" . $etiqueta . ":</b> No recibido</p>";
                } // COMPROBAR SI EL CAMPO EXISTE EN LOS DATOS RECIBIDOS
            } // RECORRER LOS CAMPOS Y MOSTRAR SUS VALORES
        } else {
            // MOSTRAR UN MENSAJE SI NO SE UTILIZA GET NI POST
            echo "No se han enviado datos.";
        } // COMPROBAR SI SE HAN ENVIADO DATOS MEDIANTE GET O POST
    ?>

    <!-- VOLVER AL FORMULARIO -->
    <br>
    <a href="formulario.php">Volver al formulario</a>
</body>
</html>