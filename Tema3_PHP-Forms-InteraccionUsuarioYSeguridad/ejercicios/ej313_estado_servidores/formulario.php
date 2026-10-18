<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de estado de almacenamiento</title>
    <!-- EJERCICIO 313: ESTADO DE ALMACENAMIENTO DE SERVIDORES -->
</head>

<body>
    <h1>Panel de estado de almacenamiento</h1>
    <!-- ENVIAR LOS DATOS AL ARCHIVO QUE PROCESA EL FORMULARIO -->
    <form action="procesar_formulario.php" method="POST">
        <label for="codigo">Código del Técnico:</label>
        <input type="text" id="codigo" name="codigo" required> <br><br>

        <label>Formato del reporte:</label> <br>
        <input type="radio" id="tabla" name="reporte" value="tabla" checked>
        <label for="tabla">Tabla de Control</label>
        <input type="radio" id="lista" name="reporte" value="lista">
        <label for="lista">Lista de Estado</label> <br><br>

        <!-- ENVIAR EL FORMULARIO -->
        <button type="submit">Mostrar panel</button>
    </form>
</body>
</html>