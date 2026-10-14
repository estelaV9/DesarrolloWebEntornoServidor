<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- EJER 312: VALIDAR LOS DATOS RECIBIDOS Y MOSTRAR LAS TAREAS EN UNA TABLA O EN UNA LISTA SEGUN LA VISTA SELECCIONADA -->
    <title>Resultado del panel</title>
</head>

<body>
    <h1>Panel de gestion de tareas</h1>

    <?php
        // COMPROBAR QUE LOS DATOS SE HAN ENVIADO MEDIANTE POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS Y ELIMINAR LOS ESPACIOS SOBRANTES
            $nombre = trim($_POST["nombre"] ?? "");
            $vista = $_POST["vista"] ?? "";
        
            $tareas = [
                "Revisar base de datos",
                "Diseñar interfaz de usuario",
                "Subir cambios a produccion",
                "Reunion con el cliente"
            ]; // CREAR EL ARRAY CON LAS TAREAS DEL PANEL
        
            $errores = []; // CREAR UN ARRAY PARA GUARDAR LOS POSIBLES ERRORES
        
            if ($nombre == "") {
                $errores[] = "El nombre del administrador es obligatorio.";
            } // COMPROBAR QUE EL NOMBRE NO ESTE VACIO
        
            if (!in_array($vista, ["tabla", "lista"], true)) {
                $errores[] = "Debes seleccionar una vista valida.";
            } // COMPROBAR QUE SE HA SELECCIONADO UNA VISTA VALIDA

            // MOSTRAR LOS ERRORES SI EXISTEN
            if (!empty($errores)) {
                echo "<h2>Errores</h2>";
                echo "<ul>";
                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</li>";
                }
                echo "</ul>";
            } else {
                // MOSTRAR EL NOMBRE DEL ADMINISTRADOR DE FORMA SEGURA
                echo "<h2>Bienvenido, " .
                    htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") .
                    "</h2>";

                // MOSTRAR LAS TAREAS EN FORMATO DE TABLA
                if ($vista == "tabla") {
                    echo "<h3>Lista de tareas</h3>";
                    echo "<table border='1'>";
                    echo "<thead>";
                    echo "<tr><th>Numero</th><th>Tarea</th></tr>";
                    echo "</thead>";
                    echo "<tbody>";
                
                    foreach ($tareas as $indice => $tarea) {
                        echo "<tr>";
                        echo "<td>" . ($indice + 1) . "</td>";
                        echo "<td>" . htmlspecialchars($tarea) . "</td>";
                        echo "</tr>";
                    } // RECORRER EL ARRAY Y CREAR UNA FILA POR CADA TAREA

                    echo "</tbody>";
                    echo "</table>";

                    // MOSTRAR LAS TAREAS EN FORMATO DE LISTA
                } elseif ($vista == "lista") {
                    echo "<h3>Lista de tareas</h3>";
                    echo "<ul>";
                
                    foreach ($tareas as $tarea) {
                        echo "<li>" . htmlspecialchars($tarea) . "</li>";
                    } // RECORRER EL ARRAY Y CREAR UN ELEMENTO POR CADA TAREA

                    echo "</ul>";
                }
            }
        } else {
            echo "Acceso no permitido";
        }        
        // MOSTRAR UN ENLACE PARA VOLVER AL FORMULARIO
        echo "<br><a href='formulario.php'>Volver al formulario</a>";
    ?>
</body>
</html>