<html>

<head></head>

<body>
    <!-- EJER 8: DADO DOS NUMEROS ALEATORIOS A Y B (ENTRE 1 Y 10), MOSTRAR SU SUMA, RESTA, MULTIPLICACION Y DIVISION -->
    <?php echo "EJER 8: OPERAR NUMERO RANDOM" . "<br><br>"; ?>

    <?php
        $random1 = rand(1, 10);
        $random2 = rand(1, 10);

        $suma = $random1 + $random2;
        $resta = $random1 - $random2;
        $multiplicacion = $random1 * $random2;
        $division = $random1 / $random2;

        echo "la suma de " . $random1 . " y " . $random2 . " es: " . $suma . "<br>";
        echo "la resta de " . $random1 . " y " . $random2 . " es: " . $resta . "<br>";
        echo "la multiplicacion de " . $random1 . " y " . $random2 . " es: " . $multiplicacion . "<br>";
        echo "la division de " . $random1 . " y " . $random2 . " es: " . round($division, 1) . "<br>";
        // SE USA ROUND PARA REDONDEAR A UN DECIMAL
    ?>
</body>

</html>