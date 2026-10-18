<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <!-- EJERCICIO 314: FORMULARIO DE CONTACTO -->
</head>

<body>
    <h2>FORMULARIO DE CONTACTO</h2>
    <form action="procesar_contacto.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required> <br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required> <br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea> <br><br>

        <label for="archivo">Archivo Adjunto:</label>
        <input type="file" id="archivo" name="archivo"> <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>