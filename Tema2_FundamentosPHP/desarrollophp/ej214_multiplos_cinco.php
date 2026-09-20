<!DOCTYPE html>
<html lang="es">

<head></head>

<body>
    <!-- EJER 14: FILTRAR MULTIPLOS DE 5
     RECORRER LOS NUMEROS DEL 1 AL 30 E IMPIMIR UNICAMENTE LOS MULTIPLOS DE 50% -->
    <h1>EJER 14: MULTIPLOS DE 5</h1>
    <?php
        $imprimir = ""; // VARIABLE PARA CONCATENAR LOS MULTIPLOS
        
        for ($i = 1; $i <= 30; $i++) {
            if ($i % 5 == 0) {
                $imprimir .= $i . ", "; // CONCATENAMOS LOS MULTIPLOS
            } // SI ES MULTIPLO DE 5 SE CONTATENA
        } // RECORREMOS LOS NUMEROS DEL 1 AL 30
        
        echo substr($imprimir, 0, -2); // QUITAMOS EL ULTIMO CARACTER (,)
    ?>
</body>

</html>