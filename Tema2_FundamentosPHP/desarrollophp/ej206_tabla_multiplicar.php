<html>

<head></head>

<body>
    <!-- EJER 6: CREAR TABLA MULTIPLICAR HASTA EL NUMERO 10 DE X NUMERO -->
    <?php echo "EJER 6: TABLA DE MULTIPLICAR" . "<br><br>"; ?>

    <?php
        $i = 1;
        $num = 5; // NUMERO DE LA TABLA A MULTIPLICAR
        $total = 0; // CALCULAR LA MULTIPLICACION
        echo "Tabla de Multiplicar del numero " . $num . " con <b>while</b>";
        echo "<br><br>";

        echo "<table border=1>";
        while ($i <= 10) {
            $total = ($i * $num);
            echo "<tr><td>" . $num . " x " . $i . " = " . $total . "</td></tr>";
            $i++;
        } // SE MUESTRA LA TABLA DEL NUMERO HASTA LA MULTIPLICACION POR 10
        echo "</table>";

        echo "<br><br>";

        echo "Tabla de Multiplicar del numero " . $num . " con <b>for</b><br><br>";
        echo "<table border=1>";
        for ($j = 1; $j <= 10; $j++) {
            $total = ($j * $num);
            echo "<tr><td>" . $num . " x " . $j . " = " . $total . "</td></tr>";
        } // SE MUESTRA LA TABLA DEL NUMERO HASTA LA MULTIPLICACION POR 10
        echo "</table>";
    ?>
</body>

</html>