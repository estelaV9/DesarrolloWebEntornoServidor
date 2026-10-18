<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 303: CREAR UN FORMULARIO DE REGISTRO DE PROGRAMADOR CON ENVIO POR POST -->
    <title>Registro de programador</title>
</head>

<body>
    <h1>EJER 303: REGISTRO DE PROGRAMADOR</h1>

    <!-- ENVIAR LOS DATOS DEL FORMULARIO AL ARCHIVO PHP -->
    <form action="proceso_formulario.php" method="post">

        <!-- CAMPO OBLIGATORIO PARA EL NOMBRE -->
        <label for="nombre">Nombre: *</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <!-- CAMPO OPCIONAL PARA EL CORREO ELECTRONICO -->
        <label for="email">Correo electronico:</label>
        <input type="email" id="email" name="email">
        <br><br>

        <!-- CAMPO OPCIONAL PARA EL TELEFONO -->
        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" name="telefono">
        <br><br>

        <!-- AGRUPAR LOS LENGUAJES DE PROGRAMACION -->
        <fieldset>
            <legend>Lenguajes de programacion que conoces: *</legend>

            <input type="checkbox" id="js" name="lenguajes[]" value="JavaScript">
            <label for="js">JavaScript</label>
            <br>

            <input type="checkbox" id="php" name="lenguajes[]" value="PHP">
            <label for="php">PHP</label>
            <br>

            <input type="checkbox" id="python" name="lenguajes[]" value="Python">
            <label for="python">Python</label>
            <br>

            <input type="checkbox" id="nodejs" name="lenguajes[]" value="NodeJS">
            <label for="nodejs">NodeJS</label>
        </fieldset>

        <br>

        <!-- SELECCIONAR EL NIVEL DE INGLES -->
        <fieldset>
            <legend>Nivel de ingles: *</legend>

            <input type="radio" id="bajo" name="ingles" value="bajo" required>
            <label for="bajo">Bajo</label>
            <br>

            <input type="radio" id="medio" name="ingles" value="medio">
            <label for="medio">Medio</label>
            <br>

            <input type="radio" id="alto" name="ingles" value="alto">
            <label for="alto">Alto</label>
        </fieldset>

        <br>

        <!-- ENVIAR LOS DATOS -->
        <button type="submit">Registrarse</button>

        <!-- LIMPIAR LOS CAMPOS -->
        <button type="reset">Limpiar formulario</button>
    </form>
</body>
</html>