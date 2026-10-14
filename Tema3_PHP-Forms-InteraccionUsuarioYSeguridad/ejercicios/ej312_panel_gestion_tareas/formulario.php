<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- EJER 312: CREAR UN FORMULARIO PARA INTRODUCIR EL NOMBRE DEL ADMINISTRADOR Y SELECCIONAR LA VISTA DEL PANEL -->
    <title>Panel de gestion de tareas</title>
</head>

<body>
    <h1>Panel de gestion de tareas</h1>

    <!-- ENVIAR LOS DATOS AL ARCHIVO QUE PROCESA EL FORMULARIO -->
    <form action="procesar_formulario.php" method="POST">
        <!-- CAMPO PARA INTRODUCIR EL NOMBRE DEL ADMINISTRADOR -->
        <label for="nombre">Nombre del administrador:</label>
        <input type="text" id="nombre" name="nombre" required>

        <br><br>

        <!-- SELECCIONAR COMO SE MOSTRARAN LAS TAREAS -->
        <label for="vista">Selecciona la vista del panel:</label>
        <select id="vista" name="vista" required>
            <option value="">-- Seleccione una vista --</option>
            <option value="tabla">Vista de tabla</option>
            <option value="lista">Vista de lista</option>
        </select>

        <br><br>

        <!-- ENVIAR EL FORMULARIO -->
        <button type="submit">Mostrar panel</button>
    </form>
</body>
</html>