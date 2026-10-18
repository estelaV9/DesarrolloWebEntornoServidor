<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 303: PROCESAR LOS DATOS DEL FORMULARIO DE REGISTRO DE PROGRAMADOR -->
    <title>Datos del programador</title>
</head>

<body>
    <h1>Datos del programador</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS ENVIADOS POR EL FORMULARIO
            $nombre = trim($_POST["nombre"] ?? "");
            $email = trim($_POST["email"] ?? "");
            $telefono = trim($_POST["telefono"] ?? "");
            $lenguajes = $_POST["lenguajes"] ?? [];
            $ingles = $_POST["ingles"] ?? "";
        
            $errores = []; // CREAR UN ARRAY PARA GUARDAR LOS ERRORES
        
            if ($nombre == "") {
                $errores[] = "El nombre es obligatorio.";
            } // COMPROBAR QUE EL NOMBRE NO ESTA VACIO
        
            if ($email != "" && strpos($email, "@") === false) {
                $errores[] = "El correo electronico debe contener una @.";
            } // COMPROBAR EL EMAIL SOLO SI SE HA ESCRITO
        
            if (!is_array($lenguajes) || count($lenguajes) == 0) {
                $errores[] = "Debes seleccionar al menos un lenguaje de programacion.";
            } else {           
                foreach ($lenguajes as $lenguaje) {
                    if ($lenguaje != "JavaScript" && $lenguaje != "PHP" && $lenguaje != "Python" && $lenguaje != "NodeJS") {
                        $errores[] = "Se ha seleccionado un lenguaje no valido.";
                        break;
                    }
                } // COMPROBAR QUE LOS LENGUAJES SEAN LOS PERMITIDOS
            } // COMPROBAR QUE SE HA SELECCIONADO AL MENOS UN LENGUAJE
        
            if ($ingles != "bajo" && $ingles != "medio" && $ingles != "alto") {
                $errores[] = "Debes seleccionar un nivel de ingles valido.";
            } // COMPROBAR QUE EL NIVEL DE INGLES SEA CORRECTO

            // MOSTRAR LOS ERRORES SI EXISTE ALGUNO
            if (count($errores) > 0) {
                echo "<h2>Se han encontrado errores</h2>";
                echo "<ul>";

                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                }

                echo "</ul>";
                echo '<p><a href="formulario.html">Volver al formulario</a></p>';
            } else {
                // MOSTRAR LOS DATOS SI SON CORRECTOS
                echo "<h2>Registro completado</h2>";
                echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";

                // MOSTRAR EL EMAIL SI SE HA INTRODUCIDO
                echo "<p><strong>Email:</strong> ";
                echo ($email != "") ?  htmlspecialchars($email) : "No especificado";

                echo "</p>";

                // MOSTRAR EL TELEFONO SI SE HA INTRODUCIDO
                echo "<p><strong>Telefono:</strong> ";
                echo ($telefono != "") ? htmlspecialchars($telefono) : "No especificado";
                echo "</p>";

                // MOSTRAR LOS LENGUAJES SELECCIONADOS
                echo "<p><strong>Lenguajes de programacion:</strong></p>";
                echo "<ul>";

                foreach ($lenguajes as $lenguaje) {
                    echo "<li>" . htmlspecialchars($lenguaje) . "</li>";
                }

                echo "</ul>";

                // MOSTRAR EL NIVEL DE INGLES
                echo "<p><strong>Nivel de ingles:</strong> " . htmlspecialchars(ucfirst($ingles)) . "</p>";
            }
        } else {
            // MOSTRAR UN MENSAJE SI SE ACCEDE SIN ENVIAR EL FORMULARIO
            echo "<p>No se han recibido datos del formulario.</p>";
            echo '<p><a href="formulario.html">Ir al formulario</a></p>';
        } // COMPROBAR QUE EL FORMULARIO SE HA ENVIADO POR POST
    ?>
</body>
</html>