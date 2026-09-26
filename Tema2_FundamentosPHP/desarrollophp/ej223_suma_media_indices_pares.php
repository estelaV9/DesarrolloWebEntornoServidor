<!DOCTYPE html>
<html lang="es">
<head>
    <!-- CREAR UN ARRAY DE 10 NUMEROS ENTEROS
        RECORRER EL ARRAY:
        - SUMAR LOS VALORES QUE ESTEN EN INDICES PARES
        - MOSTRAR LOS VALORES QUE ESTEN EN INDICES IMPARES
        - CALCULAR Y MOSTRAR LA MEDIA DE LOS VALORES QUE ESTAN EN INDICES PARES -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma y media de indices pares</title>
</head>
<body>
    <h1>EJER 23: SUMA Y MEDIA DE INDICES PARES</h1>

    <?php       
        $arrayEnteros = [1,2,3,4,5,6,7,8,9,10]; // CREAR ARRAY DE NUMEROS ENTEROS

        // INICIALIZAR VARIABLES PARA LA SUMA Y EL CONTADOR
        $suma = 0;
        $contador = 0;
       
        for ($i = 0; $i < count($arrayEnteros); $i++) {           
            if ($i % 2 === 0) {
                $suma += $arrayEnteros[$i];
                $contador++;           
            } else {
                 // SI EL INDICE ES IMPAR, MOSTRAR EL VALOR
                echo "Indice $i: " . $arrayEnteros[$i] . "<br></br>";
            } // COMPROBAR SI EL INDICE ES PAR
        } // RECORRER EL ARRAY

        // CALCULAR LA MEDIA DE LOS VALORES DE LOS INDICES PARES
        $media = $suma / $contador;
       
        echo "La media es: " . $media; // MOSTRAR LA MEDIA
    ?>
</body>
</html>