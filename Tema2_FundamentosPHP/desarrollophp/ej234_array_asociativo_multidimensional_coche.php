<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 234: CREAR UN ARRAY ASOCIATIVO MULTIDIMENSIONAL CON LOS DATOS DE UN COCHE Y RECORRERLO MOSTRANDO SUS CLAVES Y VALORES -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional de un coche</title>
</head>

<body>
    <h1>EJER 234: ARRAY ASOCIATIVO MULTIDIMENSIONAL DE UN COCHE</h1>

    <?php
        $coche = array(
            "marca" => "Toyota",
            "modelo" => "Corolla",
            "motor" => array(
                "tipo" => "Hibrido",
                "cilindrada" => 1.8,
                "potencia_cv" => 140
            ),
            "dimensiones" => array(
                "largo_m" => 4.37,
                "ancho_m" => 1.79,
                "maletero_l" => 361
            ),
            "equipamiento" => array(
                "climatizador" => "Bizona",
                "camara_trasera" => "Si",
                "asistente_carril" => "Si"
            )
        ); // CREAR UN ARRAY ASOCIATIVO CON LOS DATOS DEL COCHE

        foreach ($coche as $clave => $valor) {
            echo "<strong>" . $clave . "</strong><br>";
           
            if (is_array($valor)) {              
                foreach ($valor as $i => $v) {
                    echo "-------<b>" . $i . ": </b>" . $v . "<br>";
                } // RECORRER EL ARRAY INTERIOR
            } else {
                // MOSTRAR EL VALOR SI NO ES UN ARRAY
                echo $valor . "<br>";
            } // COMPROBAR SI EL VALOR ES OTRO ARRAY
        } // RECORRER EL ARRAY PRINCIPAL EN FORMATO CLAVE-VALOR
    ?>
</body>
</html>