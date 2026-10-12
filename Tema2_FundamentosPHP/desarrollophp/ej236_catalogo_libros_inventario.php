<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 236: CREAR UN CATALOGO DE LIBROS, MOSTRAR EN UNA TABLA LOS LIBROS CON STOCK DISPONIBLE, CALCULAR EL VALOR DEL INVENTARIO Y MOSTRAR LOS TITULOS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de libros e inventario</title>
</head>

<body>
    <h1>EJER 236: CATALOGO DE LIBROS E INVENTARIO</h1>

    <?php
        $catalogo = [
            [
                "titulo" => "El Quijote",
                "autor" => "Miguel de Cervantes",
                "precio" => 15.50,
                "stock" => 8
            ],
            [
                "titulo" => "Cien años de soledad",
                "autor" => "Gabriel García Márquez",
                "precio" => 20.00,
                "stock" => 0
            ],
            [
                "titulo" => "1984",
                "autor" => "George Orwell",
                "precio" => 12.00,
                "stock" => 5
            ],
            [
                "titulo" => "Fahrenheit 451",
                "autor" => "Ray Bradbury",
                "precio" => 14.20,
                "stock" => 3
            ]
        ]; // CREAR UN ARRAY MULTIDIMENSIONAL CON LOS DATOS DE LOS LIBROS

        // CREAR LA TABLA Y SUS ENCABEZADOS
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; text-align: left;'>";
        echo "<thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Valor inventario</th>
                </tr>
            </thead>
            <tbody>";
    
        foreach ($catalogo as $libro) {
            // CALCULAR EL VALOR DEL INVENTARIO DE CADA LIBRO
            $valorTotalInventario = $libro["precio"] * $libro["stock"];

            if ($libro["stock"] > 0) {
                echo "<tr>";
                echo "<td>" . $libro["titulo"] . "</td>";
                echo "<td>" . $libro["autor"] . "</td>";
                echo "<td>" . number_format($libro["precio"], 2) . " €</td>";
                echo "<td>" . $libro["stock"] . "</td>";
                echo "<td>" . number_format($valorTotalInventario, 2) . " €</td>";
                echo "</tr>";
            } // MOSTRAR LA FILA SOLO SI HAY UNIDADES DISPONIBLES
        } // RECORRER EL CATALOGO Y MOSTRAR SOLO LOS LIBROS CON STOCK DISPONIBLE

        echo "</tbody></table>";

        // OBTENER Y MOSTRAR UN ARRAY CON LOS TITULOS DE TODOS LOS LIBROS
        echo "<br><pre>";
        print_r(array_column($catalogo, "titulo"));
        echo "</pre>";
    ?>
</body>
</html>