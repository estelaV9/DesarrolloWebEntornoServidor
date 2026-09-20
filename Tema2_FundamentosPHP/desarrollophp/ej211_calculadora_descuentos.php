<html>

<head></head>

<body>
    <!-- EJER 11: CALCULAR EL PRECIO FINAL DE UNA COMPRA APLICANDO UN DESCUENTO SEGUN EL MONTO GASTADO
         CREA LA VARIABLE $totalcompra. ALEATORIO 10 Y 120
         - SI LA COMPRA ES MENOR A 50€, NO HAY DESCUENTO
         - SI ESTA ENTRE 50 Y 100 APLICA UN 10% DE DESCUENTO
         - SI ES MAYOR A 100 APLICA UN 20% DE DESCUENTO
         MUESTRA EL DESCUENTO APLICADO Y EL TOTAL FINAL A PAGAR -->
    <?php echo "EJER 11: CALCULADORA DE DESCUENTOS" . "<br><br>"; ?>


    <?php
        $totalcompra = rand(10, 120);
        $total_descuento = 0; // TOTAL DEL DESCUENTO APLICADO
        $compra_final = 0; // TOTAL DE LA COMPRA CON EL DESCUENTO
        $descuento = 0; // VALOR DEL DESCUENTO PARA MOSTRAR QUE % DE DESCUENTO SE APLICA
        

        if ($totalcompra > 100) {
            $descuento = 20;
        } elseif ($totalcompra >= 50 && $totalcompra <= 100) {
            $descuento = 10;
        } else {
            $descuento = 0;
        }


        $total_descuento = $totalcompra * ($descuento / 100);
        $compra_final = $totalcompra - $total_descuento; // CALCULAMOS EL TOTAL
        
        echo "Su monto gastado en la compra es de " . $totalcompra . "<br>";
        echo "Se le aplica un descuento del " . $descuento . "%. Descuento total de " . $total_descuento . "<br>";
        echo "quedando el total de su compra en <b>" . $compra_final . "€</b>";
    ?>
</body>

</html>