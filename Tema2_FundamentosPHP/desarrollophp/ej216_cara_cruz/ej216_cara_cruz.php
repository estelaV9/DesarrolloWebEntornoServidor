<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 16: MOSTRAR LA CARA DE LA MONEDA QUE HAYA SALIDO ALEATORIAMENTE -->
    <meta charset="UTF-8">
    <title>Cara o cruz</title>
</head>

<body>
    <h1>EJER 16: CARA O CRUZ</h1>

    <?php
        $caraocruz = rand(0, 1); // ELIGE ALEATORIAMENTE QUE PARTE DE LA MONEDA ENSEÑA
        // SEGUN LA CARA SE MUESTRA UNA RUTA DE IMAGEN U OTRA
        $source = ($caraocruz == 0) ? "assets/cara_moneda.jpg" : "assets/cruz_moneda.jpg";
        echo "<img src='" . $source . "' width='200px'>"; // SE IMPRIME LA IMAGEN CON LA RUTA ELEGIDA
    ?>
</body>

</html>