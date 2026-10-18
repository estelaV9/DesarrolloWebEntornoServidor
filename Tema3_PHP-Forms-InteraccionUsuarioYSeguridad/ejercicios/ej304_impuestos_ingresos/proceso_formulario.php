<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 304: PROCESAR LOS DATOS Y COMPROBAR SI DEBE PAGAR IMPUESTOS -->
    <title>Resultado de los ingresos</title>
</head>

<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // RECOGER LOS DATOS ENVIADOS POR EL FORMULARIO
            $nombre = trim($_POST['nombre'] ?? '');
            $ingresos = $_POST['ingresos'] ?? '';

            if ($nombre == '') {
                echo "Error: Debe indicar obligatoriamente su nombre.";
            } elseif ($ingresos == '') {
                echo "Error: Debe seleccionar obligatoriamente un rango de ingresos.";
            } elseif ($ingresos != "1" && $ingresos != "2" && $ingresos != "3") {
                echo "Error: El rango de ingresos seleccionado no es valido.";
            } else {
                // MOSTRAR EL NOMBRE Y COMPROBAR SI DEBE PAGAR IMPUESTOS
                echo "Nombre: " . htmlspecialchars($nombre) . "<br>";

                if ($ingresos == "3") {
                    echo "Estimado/a " . htmlspecialchars($nombre) . ", usted debe pagar impuestos a las ganancias.";
                } else {
                    echo "Estimado/a " . htmlspecialchars($nombre) . ", usted no debe pagar impuestos a las ganancias.";
                } // COMPROBAR SI LOS INGRESOS SUPERAN LOS 3000
            } // COMPROBAR QUE LOS DATOS SON CORRECTOS
        } else {
            echo "Acceso no valido.";
        } // COMPROBAR QUE EL FORMULARIO SE HA ENVIADO POR POST
    ?>
</body>
</html>