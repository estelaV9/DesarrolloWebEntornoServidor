<html>

<head></head>

<body>
    <!-- EJER 9: COMPARAR DOS NUMEROS Y DECIR CUAL ES EL MAYOR DE LOS DOS, O SI SON IGUALES -->
    <?php echo "EJER 9: COMPARAR 2 NUMEROS RANDOMS" . "<br><br>"; ?>

    <?php
        $random1 = rand(1, 10);
        $random2 = rand(1, 10);
        $mayor = 0;
        $es_igual = false;

        if ($random1 == $random2) {
            $es_igual = true;
        } else if ($random1 > $random2) {
            $mayor = $random1;
            $es_igual = false;
        } else {
            $mayor = $random2;
            $es_igual = false;
        }

        echo "Numero aleatorio 1: " . $random1 . "<br>";
        echo "Numero aleatorio 2: " . $random2 . "<br>";
        if ($es_igual) {
            echo "Los numeros son iguales";
        } else {
            echo "El mayor es: " . $mayor . "<br>";
        }
    ?>
</body>

</html>