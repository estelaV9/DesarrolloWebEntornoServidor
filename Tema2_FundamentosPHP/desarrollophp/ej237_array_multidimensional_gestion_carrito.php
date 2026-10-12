<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 237: GESTIONAR UN CARRITO DE COMPRA CON DATOS DEL PEDIDO Y SUS PRODUCTOS, CALCULAR SUBTOTALES Y EL TOTAL FINAL, Y APLICAR ENVIO GRATUITO A PARTIR DE 70 EUROS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion del carrito de compra</title>
</head>

<body>
    <h1>EJER 237: GESTION DEL CARRITO DE COMPRA</h1>

    <?php
        $carrito = [
            "id_pedido" => 4021,
            "cliente" => "Marcos Ruiz",
            "gastos_envio" => 4.95,
            "productos" => [
                [
                    "nombre" => "Teclado Mecanico",
                    "precio_unitario" => 45.00,
                    "cantidad" => 1
                ],
                [
                    "nombre" => "Raton Inalambrico",
                    "precio_unitario" => 20.00,
                    "cantidad" => 2
                ],
                [
                    "nombre" => "Alfombrilla XL",
                    "precio_unitario" => 12.50,
                    "cantidad" => 1
                ]
            ]
        ]; // CREAR UN ARRAY ASOCIATIVO CON LOS DATOS DEL PEDIDO Y SUS PRODUCTOS

        $total_productos = 0; // ACUMULAR EL IMPORTE DE TODOS LOS PRODUCTOS
        $gastos_envio = $carrito["gastos_envio"]; // OBTENER LOS GASTOS DE ENVIO
        $total_final = 0; // GUARDAR EL TOTAL FINAL
        $subtotal = 0; // GUARDAR EL SUBTOTAL DE CADA PRODUCTO
        $gastos_envio_final = 0; // GUARDAR LOS GASTOS DE ENVIO DEFINITIVOS
        $resto = 0; // CALCULAR CUANTO FALTA PARA CONSEGUIR EL ENVIO GRATUITO
        
        // MOSTRAR EL NUMERO DE PEDIDO Y EL NOMBRE DEL CLIENTE
        echo "<h2>Datos generales</h2>";
        echo "Numero de pedido: <b>" . $carrito["id_pedido"] . "</b><br>";
        echo "Cliente: <b>" . $carrito["cliente"] . "</b>";

        // MOSTRAR LOS PRODUCTOS EN UNA TABLA
        echo "<h2>Productos y subtotales</h2>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                </tr>";

        foreach ($carrito["productos"] as $producto) {
            $subtotal = $producto["precio_unitario"] * $producto["cantidad"];
            $total_productos += $subtotal; // ACUMULAR EL SUBTOTAL
        
            echo "<tr>";
            echo "<td>" . $producto["nombre"] . "</td>";
            echo "<td>" . $producto["cantidad"] . "</td>";
            echo "<td>" . number_format($producto["precio_unitario"], 2) . " €</td>";
            echo "<td>" . number_format($subtotal, 2) . " €</td>";
            echo "</tr>";
        } // RECORRER LOS PRODUCTOS Y CALCULAR SUS SUBTOTALES

        // MOSTRAR EL TOTAL DE TODOS LOS PRODUCTOS
        echo "<tr>";
        echo "<th colspan='3'>Subtotal productos</th>";
        echo "<th>" . number_format($total_productos, 2) . " €</th>";
        echo "</tr>";
        echo "</table>";

        // CALCULAR EL TOTAL INICIAL INCLUYENDO LOS GASTOS DE ENVIO
        $total_final = $total_productos + $gastos_envio;

        echo "<h2>Total a pagar</h2>";
        echo "Subtotal productos: <b>" . number_format($total_productos, 2) . " €</b><br>";
        echo "Gastos de envio: <b>" . number_format($gastos_envio, 2) . " €</b><br>";
        echo "Total final: <b>" . number_format($total_final, 2) . " €</b>";

        // COMPROBAR SI EL SUBTOTAL PERMITE CONSEGUIR EL ENVIO GRATUITO
        echo "<h2>Recalcular el total a pagar</h2>";

        if ($total_productos >= 70) {
            $frase = "Envio gratuito";
        } else {
            $resto = 70 - $total_productos;
            $frase = "Te faltan " . number_format($resto, 2) . " € para el envio gratis";
        }

        // APLICAR ENVIO GRATUITO SI EL SUBTOTAL ES IGUAL O SUPERIOR A 70 EUROS
        $gastos_envio_final = ($total_productos >= 70) ? 0 : $gastos_envio;
        $total_final = $total_productos + $gastos_envio_final;

        // MOSTRAR EL TOTAL DEFINITIVO
        echo "<p><b>" . $frase . "</b></p>";
        echo "Subtotal productos: <b>" . number_format($total_productos, 2) . " €</b><br>";
        echo "Gastos de envio: <b>" . number_format($gastos_envio_final, 2) . " €</b><br>";
        echo "Total final: <b>" . number_format($total_final, 2) . " €</b>";
    ?>
</body>
</html>