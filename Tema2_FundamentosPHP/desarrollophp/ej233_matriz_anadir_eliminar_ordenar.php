<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 233: MOSTRAR UNA MATRIZ, AÑADIR UNA FILA, ELIMINAR OTRA FILA Y ORDENAR LAS FILAS DE FORMA DESCENDENTE SEGUN EL CUARTO VALOR -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de elementos</title>
</head>

<body>
    <h1>EJER 233: AÑADIR, ELIMINAR Y ORDENAR ELEMENTOS DE UNA MATRIZ</h1>

    <?php       
        $matriz = [
            [1, 101, 50, 4],
            [2, 102, 120, 2],
            [3, 103, 15, 9],
            [4, 104, 10, 3]
        ]; // CREAR UNA MATRIZ CON CUATRO FILAS Y CUATRO COLUMNAS

        
        // MOSTRAR TODOS LOS ELEMENTOS DE LA MATRIZ
        echo "<b>Mostrar elementos</b><br>";
        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                echo $matriz[$i][$j] . " ";
            }
            echo "<br>"; // SALTO DE LINEA AL TERMINAR CADA FILA
        }


        // AÑADIR UNA NUEVA FILA AL FINAL DE LA MATRIZ
        $nuevo = [5, 105, 85, 1];
        array_push($matriz, $nuevo);

        echo "<br><b>Añadir elemento</b><br>";
        echo "<pre>";
        print_r($matriz);
        echo "</pre>";


        // ELIMINAR LA FILA CON INDICE 1
        unset($matriz[1]);


        // REORDENAR LOS INDICES PARA QUE VUELVAN A SER CONSECUTIVOS
        $matriz = array_values($matriz);
        echo "<br><b>Eliminar elemento</b><br>";
        echo "<pre>";
        print_r($matriz);
        echo "</pre>";


        // ORDENAR LAS FILAS DE MAYOR A MENOR SEGUN EL CUARTO VALOR
        usort($matriz, function ($a, $b) {
            return $b[3] <=> $a[3];
        });

        echo "<br><b>Ordenar elementos descendente</b><br>";
        echo "<pre>";
        print_r($matriz);
        echo "</pre>";
    ?>
</body>
</html>