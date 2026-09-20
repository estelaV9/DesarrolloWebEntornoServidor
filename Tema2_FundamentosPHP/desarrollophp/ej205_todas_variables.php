<html>

<head></head>

<body>
    <!-- EJER 5: DEFINIR 4 VARIABLES, UNA DE CADA TIPO Y DESPUES IMPRIMIRLAS EN LA PAGINA, UNA POR LINEA -->
    <?php echo "EJER 5: TODOS LOS TIPOS DE VARIABLES" . "<br>"; ?>

    <?php
        $nombre = "Daniel";
        $edad = 23;
        $altura = 1.93;
        $esestudiante = true;
        $estudiante = "";

        if ($esestudiante) {
            $estudiante = "SI";
        } else {
            $estudiante = "NO";
        }

        echo "<b>con echo</b><br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Edad: " . $edad . "<br>";
        echo "Altura: " . $altura . "<br>";
        echo "Es estudiante: " . $estudiante . "<br>";
    ?>

</body>

</html>