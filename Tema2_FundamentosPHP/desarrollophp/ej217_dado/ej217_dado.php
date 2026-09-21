<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 17: MOSTRAR EL LADO DE LA CARA DEL DADO ALETARO -->
    <meta charset="UTF-8">
    <title>Dado</title>
</head>

<body>
    <h1>EJER 17: DADO</h1>

    <?php
        $caradado = rand(1, 6);
        echo "<img src='assets/cara" . $caradado . ".png' width='200px'>";
    ?>
</body>

</html>