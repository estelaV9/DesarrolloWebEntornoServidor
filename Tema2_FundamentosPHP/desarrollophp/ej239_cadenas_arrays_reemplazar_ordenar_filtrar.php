<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 239: REEMPLAZAR CARACTERES, SEPARAR UNA CADENA EN UN ARRAY, ORDENARLO, FILTRAR SUS ELEMENTOS Y CONTARLOS -->
    <title>Cadenas y arrays en PHP</title>
</head>

<body>
    <h1>EJER 239: CADENAS Y ARRAYS</h1>

    <?php
        $frase = "a-a-r-e-f-a"; // CREAR LA CADENA ORIGINAL

        echo "<b>Frase original:</b> " . $frase . "<br>";

        // REEMPLAZAR TODAS LAS LETRAS 'a' POR LA PALABRA 'tortuga'
        $fraseTortuga = str_replace("a", "tortuga", $frase);
        echo "<b>Frase con tortuga:</b> " . $fraseTortuga . "<br>";

        // SEPARAR LA CADENA EN UN ARRAY UTILIZANDO EL GUION COMO SEPARADOR
        $arrayVocal = explode("-", $frase);

        echo "<br><b>Array original:</b><br>";
        echo "<pre>";
        print_r($arrayVocal);
        echo "</pre>";

        // ORDENAR EL ARRAY ALFABETICAMENTE EN ORDEN DESCENDENTE
        rsort($arrayVocal);

        echo "<b>Array ordenado descendentemente:</b><br>";
        echo "<pre>";
        print_r($arrayVocal);
        echo "</pre>";

        // CREAR UN NUEVO ARRAY SIN LOS ELEMENTOS QUE CONTENGAN LA LETRA 'a'
        $nuevoArray = [];
        foreach ($arrayVocal as $valor) {
            // COMPROBAR QUE EL ELEMENTO NO CONTENGA LA LETRA 'a'
            if (strpos($valor, "a") === false) {
                $nuevoArray[] = $valor;
            }
        }

        echo "<b>Array sin la letra 'a':</b><br>";
        echo "<pre>";
        print_r($nuevoArray);
        echo "</pre>";

        // MOSTRAR LA CANTIDAD DE ELEMENTOS DEL NUEVO ARRAY
        echo "<b>Cantidad de elementos:</b> " . count($nuevoArray) . "<br>";
    ?>
</body>
</html>