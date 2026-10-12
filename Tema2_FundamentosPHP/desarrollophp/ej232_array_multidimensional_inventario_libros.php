<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 232: CREAR UN ARRAY MULTIDIMENSIONAL CON LIBROS Y RECORRER SUS DATOS -->
    <title>Inventario de libros</title>
</head>

<body>
    <h1>EJER 232: ARRAY MULTIDIMENSIONAL ASOCIATIVO</h1>

    <?php
        $inventario_libros = [
            [
                'id' => 101,
                'titulo' => 'Desarrollo web en PHP',
                'autor' => 'Sanchez',
                'precio' => 45.99
            ],
            [
                'id' => 102,
                'titulo' => 'Bases de Datos con MySQL',
                'autor' => 'Gomez',
                'precio' => 35.50
            ],
            [
                'id' => 103,
                'titulo' => 'POO Avanzada',
                'autor' => 'Perez',
                'precio' => 60.00
            ]
        ]; // CREAR UN ARRAY MULTIDIMENSIONAL CON LOS DATOS DE CADA LIBRO
       
        foreach ($inventario_libros as $libro) {
            echo "<h2>" . $libro['titulo'] . "</h2>";

            // MOSTRAR LOS DATOS DEL LIBRO
            echo "<b>ID:</b> " . $libro['id'] . "<br>";
            echo "<b>Autor:</b> " . $libro['autor'] . "<br>";
            echo "<b>Precio:</b> " . number_format($libro['precio'], 2, ',', '.') . " €<br>";
        } // RECORRER EL ARRAY PARA MOSTRAR LOS DATOS DE CADA LIBRO
    ?>
</body>
</html>