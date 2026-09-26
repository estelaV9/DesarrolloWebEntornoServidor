<!DOCTYPE html>
<html lang="es">

<head>
    <!-- CREE UN ARRAY ASOCIATIVO LLAMADO STOK_PRODUCTOS CON LAS SIGUIENTES CLAVES (CODIGOS DE PRODUCTO) Y VALORES(CANTIDAD EN STOCK)
     A45: 15
     B10: 250
     C99: 5
     D01: 150
     AÑADIR AL ARRAY UN ELEMENTO FINAL E50:75
     DEL ARRAY ELIMINAR C99:5
     LISTAR POR PANTALLA EL ARRAY-->
    <meta charset="UTF-8">
    <title>Array asociativo stock productos</title>
</head>

<body>
    <h1>EJER 27: ARRAY ASOCIATIVO STOCK PRODUCTOS</h1>

    <?php
        $stock_productos = [
            "A45" => 15,
            "B10" => 250,
            "C99" => 5,
            "D01" => 150
        ]; // CREAR ARRAY CON LAS CLAVES
       
        $stock_productos["E50"] = 75; // AÑADIR UN ELEMENTO FINAL
       
        unset($stock_productos["C99"]); // ELIMINAR C99:5
       
        // print_r($stock_productos);
        foreach ($stock_productos as $clave => $stock) {
            echo "Clave: " . $clave . " - Stock: " . $stock . "<br>";
        } // LISTAR POR PANTALLA EL ARRAY
    ?>
</body>
</html>