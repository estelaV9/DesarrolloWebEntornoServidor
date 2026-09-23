<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 21: CREAR UN PROGRAMA QUE GENERE UN ARRAY DE NUMEROS ENTEROS Y LO MUSETRE POR PANTALLA. UTILIZAR 2 FUNCIONES: crearArray e imprimeArrat -->
    <meta charset="UTF-8">
    <title>Descuento segun cliente</title>
</head>

<body>
    <h1>EJER 21: ARRAY ENTEROS</h1>

    <?php
        function crearArray($n, $min, $max) {
            $numeros = [];

            for ($i = 0; $i < $n; $i++) {
                $numeros[$i] = rand($min, $max);
            } // RECORREMOS LOS NUMEROS AÑADIENDO UNO ALEATORIO
        
            return $numeros;
        } // FUNCION QUE DEVUELVE UN ARRAY CON N NUMEROS DE ENTRE UN MAXIMO Y UN MINIMO

        function imprimeArray($array) {
            for ($i = 0; $i < count($array); $i++) {
                echo "<p>Numero: " . $array[$i] . "</br>";
            } // RECORREMOS TODOS LOS NUMEROS DE LA LISTA
        } // FUNCION QUE IMPRIME LOS NUMEROS DE ESE ARRAY

        // LLAMAMOS A LA FUNCION PARA IMPRIMIR LA LISTA DE 10 NUMEROS ALEATORIOS DEL 1 AL 20
        imprimeArray(crearArray(10, 1, 20));
    ?>
</body>

</html>