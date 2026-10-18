<?php
    $idioma = "ES"; // IDIOMA POR DEFECTO

    if (isset($_POST["idioma"])) {
        $idioma = $_POST["idioma"];
        setcookie("idioma", $idioma, time() + 3600);
    } elseif (isset($_COOKIE["idioma"])) {
        $idioma = $_COOKIE["idioma"];
    } // COMPROBAR SI SE HA ENVIADO EL FORMULARIO

    $traducciones = [
        "ES" => "Bienvenido",
        "EN" => "Welcome",
        "IT" => "Benvenuto",
        "FR" => "Bienvenue"
    ]; // TRADUCCIONES

    // COMPROBAR QUE EL IDIOMA ES VALIDO
    if (!isset($traducciones[$idioma])) $idioma = "ES";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJERCICIO 404. QUE IDIOMAS HABLAS -->
    <meta charset="UTF-8">
    <title>Selección de idioma - Cookies</title>
</head>

<body>
    <h1>Selección de idioma</h1>

    <form method="POST" action="index.php">
        <select name="idioma">
            <option value="ES" <?php echo ($idioma == "ES") ? "selected" : ""; ?>>ESPAÑOL</option>
            <option value="EN" <?php echo ($idioma == "EN") ? "selected" : ""; ?>>ENGLISH</option>
            <option value="IT" <?php echo ($idioma == "IT") ? "selected" : ""; ?>>ITALIANO</option>
            <option value="FR" <?php echo ($idioma == "FR") ? "selected" : ""; ?>>FRANCES</option>
        </select>

        <button type="submit" name="enviar">Actualizar idioma</button>
    </form>

    <?php
        echo "<p>" . $traducciones[$idioma] . "</p>";
    ?>
</body>
</html>