<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // RECOGIDA Y LIMPIEZA DE DATOS
        $nombre = trim($_POST['nombre'] ?? '');
        $especialidad = trim($_POST['especialidad'] ?? '');
        $fecha_str = trim($_POST['fecha'] ?? '');
        $hora_str = trim($_POST['hora'] ?? '');

        $errores = [];
        $fecha_formateada = "";

        if (empty($nombre)) $errores[] = "EL NOMBRE DEL PACIENTE ES OBLIGATORIO";  // VALIDAR EL NOMBRE

        if (empty($especialidad)) $errores[] = "DEBE SELECCIONAR UNA ESPECIALIDAD MEDICA"; // VALIDAR LA ESPECIALIDAD

        if (empty($fecha_str)) {
            $errores[] = "LA FECHA DE LA CITA ES OBLIGATORIA";
        } else {
            // CONVERTIR DE STRING A FECHA CON DATE_CREATE()
            $fecha_objeto = date_create($fecha_str);

            if ($fecha_objeto == false) {
                $errores[] = "LA FECHA INTRODUCIDA NO TIENE UN FORMATO VALIDO";
            } else {
                // COMPROBAR EL FORMATO DD/MM/AAAA CON DATE_FORMAT()
                $fecha_formateada = date_format($fecha_objeto, "d/m/Y");
            } // COMPROBAR SI LA FECHA ES VALIDA
        } // VALIDAR LA FECHA

        if (empty($hora_str)) {
            $errores[] = "LA HORA DE LA CITA ES OBLIGATORIA";
        } else {
            // COMPROBAR QUE LA HORA ESTE ENTRE LAS 08:00 Y LAS 15:00
            $hora_minima = "08:00";
            $hora_maxima = "15:00";

            if ($hora_str < $hora_minima || $hora_str > $hora_maxima) {
                $errores[] = "LA HORA DEBE ESTAR COMPRENDIDA ENTRE LAS 08:00 Y LAS 15:00";
            } // COMPROBAR EL RANGO DE LA HORA
        } // VALIDAR LA HORA

        if (!empty($errores)) {
            // MOSTRAR LOS ERRORES ENCONTRADOS
            echo "<h2>ERRORES EN LA RESERVA:</h2>";
            echo "<ul style='color: red;'>";

            foreach ($errores as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
            } // MOSTRAR CADA ERROR

            echo "</ul>";
            echo "<a href='index.php'>VOLVER AL FORMULARIO</a>";
        } else {
            // MOSTRAR EL RESUMEN DE LA CITA CONFIRMADA
            echo "<h2>CITA MEDICA CONFIRMADA</h2>";
            echo "<p><strong>PACIENTE:</strong> " . htmlspecialchars($nombre) . "</p>";
            echo "<p><strong>ESPECIALIDAD:</strong> " . htmlspecialchars($especialidad) . "</p>";
            echo "<p><strong>FECHA DE CITA (DD/MM/AAAA):</strong> " . htmlspecialchars($fecha_formateada) . "</p>";
            echo "<p><strong>HORA DE CITA:</strong> " . htmlspecialchars($hora_str) . " HS</p>";

            echo "<br><a href='index.php'>RESERVAR OTRA CITA</a>";
        } // MOSTRAR RESULTADOS
    } else {
        echo "ACCESO NO PERMITIDO.";
    } // COMPROBAR EL METODO POST
?>