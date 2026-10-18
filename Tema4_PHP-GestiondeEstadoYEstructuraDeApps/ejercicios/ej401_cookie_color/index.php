<?php
    if (isset($_POST["color"])) {
        $bg = $_POST["color"];
        setcookie("color", $bg, time() + 3600);
    } elseif (isset($_COOKIE["color"])) {
        $bg = $_COOKIE["color"];
    } else {
        $bg = "#ffffff";
    }// COMPROBAR SI SE HA ENVIADO EL FORMULARIO
?>

<!DOCTYPE html>
<html>

<head>
    <!-- EJ 401. ALMACENAR EL COLOR PREFERIDO DEL USUARIO EN LA COOKIE COLOR. APLICAR COMO FONDO DE PANTALLA ESE COLOR. -->
    <title>Ejercicio 401 Cookies</title>
    <style>
        body {
            background-color:
                <?php echo $bg; ?>
            ;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        Elige un color de fondo: <br>
        <input type="color" id="color" name="color" value="<?php echo $bg; ?>"> <br>
        <input type="submit" value="Enviar">
    </form>
    <h1><?php echo $bg; ?></h1>
</body>
</html>