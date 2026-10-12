<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 238: UTILIZAR FUNCIONES DE CADENAS PARA BUSCAR, REEMPLAZAR, COMPROBAR, INVERTIR Y CONTAR CARACTERES -->
    <title>Funciones de cadenas en PHP</title>
</head>

<body>
    <h1>EJER 238: FUNCIONES DE CADENAS</h1>

    <?php
        // DECLARAR LA CADENA DE TEXTO ORIGINAL
        $frase = "Comer algas es realmente sano";

        echo "<b>Frase original:</b> " . $frase . "<br>";

        // OBTENER LA POSICION DE LA PALABRA "algas"
        // LA PRIMERA POSICION DE LA CADENA ES 0
        echo "<b>Posicion de algas:</b> " . strpos($frase, "algas") . "<br>";

        // REEMPLAZAR "realmente" POR "muy" SIN MODIFICAR LA VARIABLE ORIGINAL
        echo "<b>Reemplazar 'realmente' por 'muy':</b> "
            . str_replace("realmente", "muy", $frase) . "<br>";

        // COMPROBAR SI LA CADENA CONTIENE LA PALABRA "anacardo"
        // STR_CONTAINS DEVUELVE TRUE SI ENCUENTRA EL TEXTO
        echo "<b>Existencia de 'anacardo':</b> "
            . (str_contains($frase, "anacardo")
                ? "Si contiene anacardo"
                : "No contiene anacardo") . "<br>";

        // INVERTIR EL ORDEN DE LOS CARACTERES DE LA CADENA
        echo "<b>Texto invertido:</b> " . strrev($frase) . "<br>";

        // CONTAR CUANTAS VECES APARECE LA LETRA "e"
        echo "<b>Cantidad de vocales 'e':</b> " . substr_count($frase, "e") . "<br>";
    ?>
</body>
</html>