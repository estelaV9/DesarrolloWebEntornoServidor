<!DOCTYPE html>
<html lang="es">

<head>
    <!-- EJER 20: CREAR ARRAY CON CINCO NOMBRES DE PERSONAS Y RECORRERLO  CON UN BUCLE FOR MOSTRANDO EL TEXTO "CONOZCO A ALGUIEN LLAMADO" -->
    <meta charset="UTF-8">
    <title>Descuento segun cliente</title>
</head>

<body>
    <h1>EJER 20: ARRAY PERSONAS</h1>

    <?php
        $personas = ["Juan", "Daniel", "Paula", "Sergio", "Esteban"];

        for ($i = 0; $i < count($personas); $i++) {
            echo "<p>Conozco a alguien llamado " . $personas[$i] . "</br>";
        } // RECORREMOS TODOS LOS NOMBRES DE LA LISTA
    ?>
</body>

</html>