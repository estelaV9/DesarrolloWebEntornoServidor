<?php
    if (isset($_COOKIE["LAST_VISIT"])) {
        $first_visit = false;
        $last_visit = $_COOKIE["LAST_VISIT"];
    } else {
        $first_visit = true;
    }// COMPROBAR SI EXISTE LA COOKIE

    // GUARDAR LA FECHA Y HORA ACTUAL EN LA COOKIE
    setcookie("LAST_VISIT", time(), time() + (3600 * 24 * 365));
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJ 403. EJERCICIO DE LOGIN CON COOKIES -->
    <meta charset="UTF-8">
    <title>Ejercicio 403 - Login</title>
</head>

<body>
    <div>
        <form action="login.php" method="post">
            <input class="textInput" type="text" id="username" name="username" placeholder="USERNAME"> <br>

            <input class="textInput" type="password" id="password" name="password" placeholder="PASSWORD"> <br>

            <input class="submit" type="submit" value="LOGIN">
        </form>

        <?php
            echo "<p>" . ($first_visit == true) ? "Bienvenido por primera vez</p>" : "Tu ultima visita fue " . date("d-m-Y H:i:s", $last_visit) . "</p>";
        ?>
    </div>
</body>
</html>