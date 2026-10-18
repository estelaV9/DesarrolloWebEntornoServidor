<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorCookie = isset($_POST["aceptar"]) ? "1" : "0";
        setcookie("politica", $valorCookie, time() + 3600, "/");
        $_COOKIE["politica"] = $valorCookie;
    } // COMPROBAR SI SE HA ENVIADO EL FORMULARIO
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- EJ 402. POLITICA DE COOKIES -->
    <meta charset="UTF-8">
    <title>Ejercicio 402 - Politica de Cookies</title>
</head>

<body>
    <div>
        <h1>Cookies</h1>
        <?php
            if (isset($_COOKIE["politica"]) && $_COOKIE["politica"] == "1") {
                echo "<p>Bienvenido a mi web</p>";
                echo "<p>Puedes ver los contenidos</p>";
            } else {
                ?>
                <form method="POST" action="index.php">
                    <p>¿Aceptas las cookies de este sitio web?</p>
                    <label>
                        <input type="checkbox" name="aceptar" value="1">
                        Acepto la política de cookies
                    </label> <br><br>

                    <button type="submit" name="Enviar">Enviar</button>
                </form>
                <?php
            }
        ?>
    </div>
</body>
</html>