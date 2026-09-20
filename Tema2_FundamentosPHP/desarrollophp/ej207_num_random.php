<html>

<head></head>

<body>
    <!-- EJER 7: GENERAR UN NUMERO ALEATORIO ENTRE 1 Y 7. TRADUCIR ESE NUMERO A DIA DE LA SEMANA SIENDO 1=LUNES Y 7=DOMINGO -->
    <?php echo "EJER 7: DIA DE LA SEMANA RANDOM" . "<br><br>"; ?>

    <?php
        $aleatorio = rand(1, 7);

        switch ($aleatorio) {
            case 1:
                echo "Es lunes :(";
                break;
            case 2:
                echo "Es martes :c";
                break;
            case 3:
                echo "Es miercoles :|";
                break;
            case 4:
                echo "Es jueves :\\";
                break;
            case 5:
                echo "Es viernes :p";
                break;
            case 6:
                echo "Es sábado :D";
                break;
            case 7:
                echo "Es domingo :)";
                break;
        }
    ?>
</body>

</html>