<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ARRAY ASOCIATIVO LLAMADO CARRITO DONDE LOS INDICES SON LOS NOMBRES DE LOS PRODUCTOS Y LOS VALORES SUS RESPECTIVOS PRECIOS -->
    <meta charset="UTF-8">
    <title>Array asociativo carrito</title>
</head>
<body>
    <h1>EJER 29: ARRAY ASOCIATIVO CARRITO</h1>

    <?php
        $carrito = [
            "Auriculares Bluetooth" => 29.99,
            "Raton inalambrico" => 15.50,
            "Alfombrilla gamer" => 12.00,
            "teclado mecanico" => 45.00
        ]; // CREAR ARRAY CON LAS CLAVES
       
        // CALCULAR EL PRECIO TOTAL (SUMAR LOS PRECIOS DE TODOS LOS PRODUCTOS
        $subtotal = 0;
        $total = 0;
        $descuento = 0;

        foreach ($carrito as $clave => $precio) {
            $subtotal += $precio;
        } // VAMOS SUMANDO LOS PRECIOS DE CADA PRODUCTO

        // APLICAR UN DESCUENTO DEL 10% SU SUPERAL LOS 50 EUROS
        if ($subtotal >= 50) $descuento = $subtotal * 0.1;

        $total = $subtotal - $descuento; // RESTAMOS EL DESCUENTO


        // MOSTRAR POR PANTALLA
        //   - EL DESGLOSE DE LOS PRODUCTOS (IMPRIMIR EL ARRAY ASOCIATIVO)
        //   - EL SUBTOTAL
        //   - EL DESCUENTO APLICADO (SI CORRESPONDE)
        //   - PRECIO FINAL A PAGAR
        echo "<b>Desglose de los productos</b> </br>";
        echo print_r($carrito) . "</br>";
        echo "<b>Subtotal</b> " . round($subtotal, 2) . "</br>";
        echo "<b>Descuento aplicado</b> " . round($descuento, 2) . "</br>";
        echo "<b>Precio final a pagar</b> " . round($total, 2);
    ?>
</body>
</html>