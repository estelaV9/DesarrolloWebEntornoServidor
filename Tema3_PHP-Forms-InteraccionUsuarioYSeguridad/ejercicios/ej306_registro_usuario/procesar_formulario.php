<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 306: VALIDAR LOS DATOS DEL REGISTRO DE USUARIO -->
    <title>Procesar registro</title>
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // RECOGER LOS DATOS ENVIADOS POR EL FORMULARIO
            $nombre = trim($_POST["nombre"] ?? "");
            $correo = trim($_POST["correo"] ?? "");
            $contrasena = $_POST["contrasena"] ?? "";
            $confirmar_contrasena = $_POST["confirmar_contrasena"] ?? "";
           
            $errores = []; // CREAR UN ARRAY PARA GUARDAR LOS ERRORES

            if ($nombre == "") $errores[] = "El nombre es obligatorio."; // VALIDAR EL NOMBRE
        
            if ($correo == "") {
                $errores[] = "El correo electronico es obligatorio.";
            } elseif (strpos($correo, "@") === false || strpos($correo, ".") === false) {
                $errores[] = "El correo electronico no es valido.";
            } // VALIDAR EL CORREO ELECTRONICO
        
            if ($contrasena == "") {
                $errores[] = "La contraseña es obligatoria.";
            } elseif (strlen($contrasena) < 8) {
                $errores[] = "La contraseña debe tener al menos 8 caracteres.";
            } // VALIDAR LA LONGITUD DE LA CONTRASEÑA
        
            if ($confirmar_contrasena == "") {
                $errores[] = "Debes confirmar la contraseña.";
            } elseif ($contrasena != $confirmar_contrasena) {
                $errores[] = "Las contraseñas no coinciden.";
            } // COMPROBAR QUE LAS CONTRASEÑAS COINCIDAN
        
            if (count($errores) > 0) {
                echo "<h2>Se han encontrado los siguientes errores:</h2>";
                echo "<ul>";

                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                } // MOSTRAR CADA ERROR
        
                echo "</ul>";
                echo '<p><a href="index.html">Volver al formulario</a></p>';
            } else {
                // MOSTRAR LOS DATOS SI SON CORRECTOS
                echo "<h2>¡Registro completado!</h2>";
                echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
                echo "<p><strong>Correo electronico:</strong> " . htmlspecialchars($correo) . "</p>";
                echo "<p>La contraseña cumple los requisitos y ambas contraseñas coinciden.</p>";
            } // COMPROBAR SI HAY ERRORES
        } else {
            echo "<p>Acceso no valido.</p>";
            echo '<p><a href="index.html">Ir al formulario</a></p>';
        } // COMPROBAR QUE EL FORMULARIO SE HA ENVIADO POR POST
    ?>
</body>
</html>