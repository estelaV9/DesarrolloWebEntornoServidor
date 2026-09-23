<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 19: CALCULAR EL TOTAL A PAGAR POR UNA COMPRA APLICANDO UN PORCENTAJE DE DESCUENTO SEGUN EL PERFIL DEL CLIENTE
     TIPO DE CLIENTE SEGUN SU EDAD (0..100) Y EN SU CONDICION DE ESTUDIANTE/JUBILADO, APLICANDO LAS SIGUIENTES REGLAS
        - JUBILADO (65 AÑOS O MAS): 25% DE DESCUENTO
        - ESTUDIANTE ESO(12-16): 15% DESCUENTO
        - EL RESTO DE EDADES NO HACE DESCUENTOA LGUNO -->
    <meta charset="UTF-8">
    <title>Descuento segun cliente</title>
</head>

<body>
    <h1>EJER 19: DESCUENTO SEGUN CLIENTE</h1>

    <?php
        $importe_compra = rand(1, 200);
        $edad = rand(0, 100);
        $descuento = 0; // INICIALIZAMOS A 0
        $importe_final = 0;
        $categoria = "nada"; // INICIALIZAMOS A "nada"

        if ($edad >= 65) {
            $descuento = 25;
            $categoria = "jubilado";
        } elseif ($edad >= 12 && $edad <= 16) {
            $descuento = 15;
            $categoria = "estudiante";
        }

        $importe_final = $importe_compra - ($importe_compra * $descuento / 100); // CALCULAMOS EL TOTAL

        // IMPRIMIMOS LOS RESULTOS
        echo "<b>Importe original de la compra: </b>" . $importe_compra . "</br>";
        echo "<b>Categoria: </b>" . $categoria . "</br>";
        echo "<b>Descuento aplicado: </b>" . $descuento . "%</br>";
        echo "<b>Total a pagar: </b>" . round($importe_final, 2) . "</br>";
    ?>
</body>

</html>