<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 301: CREAR UN FORMULARIO PARA ENVIAR UN NOMBRE MEDIANTE POST -->
    <title>Formulario de nombre</title>
</head>

<body>
    <h1>EJER 301: FORMULARIO DE NOMBRE</h1>

    <!-- FORMULARIO QUE ENVIA LOS DATOS A procesar_form.php -->
    <form action="procesar_form.php" name="formulario" method="post">

        <!-- CAMPO PARA INTRODUCIR EL NOMBRE -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <!-- BOTON PARA ENVIAR EL FORMULARIO -->
        <input type="submit" value="Enviar">

        <!-- BOTON PARA LIMPIAR LOS CAMPOS DEL FORMULARIO -->
        <input type="reset" value="Limpiar formulario">
    </form>
</body>
</html>