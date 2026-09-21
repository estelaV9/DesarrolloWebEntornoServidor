<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 18: SUMAR DOS DADOS -->
    <meta charset="UTF-8">
    <title>Suma Dado</title>
    <style>
        .row {
            display: flex;
        }
    </style>
</head>

<body>
    <h1>EJER 18: SUMA DE DADOS</h1>

    <div class="row">
        <?php
            $suma = 0;
            for ($i = 0; $i < 2; $i++) {
                $caradado = rand(1, 6);
                $suma += $caradado;
                echo "<img src='assets/cara" . $caradado . ".png' width='200px'>";
            }
        ?>
    </div>

    <p>TOTAL: <?php echo $suma; ?></p>

</body>

</html>