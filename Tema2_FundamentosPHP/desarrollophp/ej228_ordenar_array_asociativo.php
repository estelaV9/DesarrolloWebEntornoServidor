<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ARRAY ASOCIATIVO LLAMADO STOK_PRODUCTOS ORDENAR POR CLAVE O VAOR-->
    <meta charset="UTF-8">
    <title>Ordenar array asociativo</title>
</head>
<body>
    <h1>EJER 28: ORDENAR ARRAY ASOCIATIVO STOCK PRODUCTOS</h1>
   
    <?php
        $stock_productos = [
            "A45" => 15,
            "B10" => 250,
            "C99" => 5,
            "D01" => 150
        ]; // CREAR ARRAY CON LAS CLAVES


        function imprimir($array){
            return print_r($array);
        } // FUNCION PARA IMPRIMIR EL ARRAY


        // ORDENAR POR INDICE ASCENDENTE
        echo "</br><h3>Funcion ksort - indice ascendente</h3>";
        ksort($stock_productos);
        imprimir($stock_productos);


        // ORDENAR POR INDICE DESCENDIENTE
        echo "</br></br><h3>Funcion krsort - indice descendente</h3>";
        krsort($stock_productos);
        imprimir($stock_productos);


        // ORDENAR POR VALOR ASCENDENTE
        echo "</br></br><h3>Funcion asort() - valor ascendente</h3>";
        asort($stock_productos);
        imprimir($stock_productos);


        // ORDENAR POR VALOR DESCENTDENTE
        echo "</br></br><h3>Funcion arsort() - valor descendente</h3>";
        arsort($stock_productos);
        imprimir($stock_productos);

        // LAS FUNCIONES SORT Y ARSORT NO VALEN PARA LOS ARRYAS ASOCIATIVOS
    ?>
</body>
</html>