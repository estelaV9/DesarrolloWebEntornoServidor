<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Receta</title>
    <!-- EJERCICIO 315: ENVIAR IMAGEN DE RECETA -->
</head>

<body>
    <h1>Envía tu foto de receta</h1>
    <form action="procesar_receta.php" method="POST" enctype="multipart/form-data">
        <label for="receta">Nombre de receta:</label>
        <input type="text" id="receta" name="receta" maxlength="80" required> <br><br>

        <label for="tipo">Tipo de receta:</label>
        <select id="tipo" name="tipo" required>
            <option value="">Selecciona una categoría</option>
            <option value="carne">Carne</option>
            <option value="pescado">Pescado</option>
            <option value="fruta">Fruta</option>
        </select> <br><br>

        <label for="archivo">Seleccionar imagen:</label>
        <input type="file" id="archivo" name="archivo" accept="image/*" required> <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>