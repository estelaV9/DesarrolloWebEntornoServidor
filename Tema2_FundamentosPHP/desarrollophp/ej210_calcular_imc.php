<html>

<head></head>

<body>
    <!-- EJER 10: MOSTRAR DOS NUMEROS ALEATORIOS, UNO DE ELLOS REPRESENTA EL PESO DE LA PERSONA (ENTRE 50 Y 100KILOS) Y EL OTRO LA ALTURA (ENTRE 1.50 Y 2.00M) Y QUE ESCRIBA EL IMC, REDONDEADO CON UN DECIMAL
         IMC = PESO / ALTURA2 -->
    <?php echo "EJER 10: CALCULAR INDICE DE MASA CORPORAL" . "<br><br>"; ?>

    <?php
        $peso = rand(50, 100);
        $altura = rand(150, 200) / 100; // RAND NO ACEPTA VALORES DECIMALES
        $imc = round($peso / pow($altura, 2), 1); // TAMBIEN SE PUEDE ELEVAR CON ** exponente
        

        echo "<h1><center>CALCULO DEL INDICE DE MASA CORPORAL</center></h1>";

        echo "Actualice la pagina para mostrar un nuevo calculo<br>";
        echo "Con un peso de " . $peso . " kg y una altura de " . $altura . " m, el IMC es " . $imc . "<br>";
        echo "IMC: " . $peso . " / " . $altura . "^2" . " = " . $imc . "<br>";
    ?>
</body>

</html>