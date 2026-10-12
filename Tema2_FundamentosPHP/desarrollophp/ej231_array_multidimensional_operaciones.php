<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 231: CREAR UN ARRAY MULTIDIMENSIONAL, RECORRERLO, ANADIR Y ELIMINAR FILAS Y ORDENAR SUS ELEMENTOS -->
    <title>Operaciones con arrays multidimensionales</title>
</head>

<body>
    <h1>EJER 231: ARRAY MULTIDIMENSIONAL</h1>

    <!-- TIPOS DE ARRAYS MULTIDIMENSIONALES:
         - ARRAYS INDEXADOS
         - ARRAYS ASOCIATIVOS
         - ARRAYS MIXTOS -->

    <?php      
        $matriz = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ]; // CREAR UN ARRAY BIDIMENSIONAL DE 3 FILAS Y 3 COLUMNAS

        function imprimirMatriz($matriz) {
            foreach ($matriz as $i => $fila) {
                foreach ($fila as $j => $valor) {
                    echo "Elemento [$i][$j]: " . $valor . "<br>";
                }
            }
        } // FUNCION PARA MOSTRAR TODOS LOS ELEMENTOS DE LA MATRIZ

        // MOSTRAR LA MATRIZ ORIGINAL
        echo "<h2>Matriz original</h2>";
        imprimirMatriz($matriz);

        // ANADIR UNA NUEVA FILA AL FINAL DE LA MATRIZ
        $nuevo = [10, 11, 12];
        array_push($matriz, $nuevo);

        echo "<h2>Matriz con una nueva fila</h2>";
        imprimirMatriz($matriz);

        // ELIMINAR LA FILA [4, 5, 6], QUE SE ENCUENTRA EN EL INDICE 1
        unset($matriz[1]);

        // REORGANIZAR LOS INDICES PARA QUE VUELVAN A EMPEZAR EN 0
        $matriz = array_values($matriz);

        echo "<h2>Matriz sin la fila [4, 5, 6]</h2>";
        echo "<pre>";
        print_r($matriz);
        echo "</pre>";

        foreach ($matriz as &$fila) {
            sort($fila);
        } // ORDENAR LOS ELEMENTOS DE CADA FILA EN ORDEN ASCENDENTE

        // ELIMINAR LA REFERENCIA A LA ULTIMA FILA PARA EVITAR MODIFICACIONES ACCIDENTALES
        unset($fila);

        echo "<h2>Matriz ordenada</h2>";
        echo "<pre>";
        print_r($matriz);
        echo "</pre>";
    ?>
</body>
</html>