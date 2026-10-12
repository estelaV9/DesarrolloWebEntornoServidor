<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- EJER 230: CREAR UN ARRAY ASOCIATIVO CON LOS MESES Y SUS NUMEROS, IMPRIMIRLO Y ORDENARLO ASCENDENTEMENTE POR SUS INDICES -->
    <title>Ordenar meses por indice</title>

    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            vertical-align: top;
        }

        th {
            background-color: #eaeaea;
        }
    </style>
</head>

<body>
    <h1>EJER 230: ORDENAR MESES</h1>

    <table>
        <tr>
            <th>Orden original de los meses</th>
            <th>Meses ordenados por indice ascendente</th>
        </tr>

        <?php
            $meses = [
                "Enero" => 1,
                "Febrero" => 2,
                "Marzo" => 3,
                "Abril" => 4,
                "Mayo" => 5,
                "Junio" => 6,
                "Julio" => 7,
                "Agosto" => 8,
                "Septiembre" => 9,
                "Octubre" => 10,
                "Noviembre" => 11,
                "Diciembre" => 12
            ]; // CREAR UN ARRAY ASOCIATIVO CON LOS MESES Y SUS NUMEROS

       
            function imprimir($array)
            {
                echo "<ul>";
                foreach ($array as $clave => $valor) {
                    echo "<li>Mes " . $clave . " - Valor: " . $valor . "</li>";
                }
                echo "</ul>";
            } // FUNCION PARA IMPRIMIR LOS MESES Y SUS VALORES
        ?>

        <tr>
            <td>
                <?php
                    imprimir($meses); // MOSTRAR EL ARRAY EN SU ORDEN ORIGINAL
                ?>
            </td>

            <td>
                <?php
                    ksort($meses); // ORDENAR EL ARRAY ALFABETICAMENTE POR SUS CLAVES               
                    imprimir($meses); // MOSTRAR EL ARRAY ORDENADO
                ?>
            </td>
        </tr>
    </table>
</body>
</html>