<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Círculo con CSS</title>
    <style>
        .circulo {
            width: 200px;
            height: 200px;
            background-color:
                <?php
                    echo "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
                ?>
            ;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- EJER 13: CADA VEZ QUE SE EJCUTE MUETRE UN CIRCULO DE 50PX DE RADIO Y DE UN COLOR ELEGIDO AL AZAR -->
    <h1>EJER 13: CAMBIAR COLOR CIRCULO</h1>
    <div class="circulo"></div>
</body>

</html>