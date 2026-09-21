<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 15: PINTAR 4 DIVS DE CLASE CIRCULO CON UN BUCLE DE 4 ITERACCIONES -->
    <meta charset="UTF-8">
    <title>Círculo con CSS</title>
    <style>
        .circulo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .row {
            display: flex;
        }
    </style>
</head>

<body>
    <h1>EJER 15: CAMBIAR COLOR 4 CIRCULOS</h1>

    <div class="row">
        <?php
            $iteracciones = 0;

            while ($iteracciones < 4) {
                // DECLARAMOS DENTRO EL COLOR PARA QUE CADA CIRCULO TENGA UN COLOR DIFERENTE
                $color = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
                echo "<div class='circulo' style='background-color: " . $color . ";'></div>";
                $iteracciones++;
            } // CONSTRUIMOS 4 CIRCULOS
        ?>
    </div>

</body>

</html>