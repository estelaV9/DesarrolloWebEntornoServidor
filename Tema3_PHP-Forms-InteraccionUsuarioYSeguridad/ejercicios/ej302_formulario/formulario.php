<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 302: CREAR UN FORMULARIO DE CONTACTO Y ENVIAR SUS DATOS MEDIANTE GET Y POST -->
    <title>Formulario de comunicacion</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Formulario de comunicacion</h1>

    <p>Puedes contactar con nosotros a traves de este formulario o usando el correo electronico contacto@aprendeaprogramar.com.</p>

    <p class="obligatorio">Obligatorio *</p>

    <!-- FORMULARIO QUE PERMITE ENVIAR LOS DATOS MEDIANTE GET O POST -->
    <form action="procesar_form.php" name="formulario" method="post">

        <!-- CAMPO OBLIGATORIO PARA EL NOMBRE -->
        <label for="nombre">Nombre: *</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <!-- CAMPO PARA LOS APELLIDOS -->
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos">
        <br>

        <!-- CAMPO PARA EL CORREO ELECTRONICO -->
        <label for="email">Correo electronico:</label>
        <input type="email" id="email" name="email">
        <br>

        <!-- CAMPO OBLIGATORIO PARA EL PAIS -->
        <label for="pais">Pais: *</label>
        <input type="text" id="pais" name="pais" required>
        <br>

        <!-- CAMPO OBLIGATORIO PARA EL MENSAJE -->
        <label for="mensaje">Mensaje: *</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea>
        <br><br>

        <!-- RESTABLECER LOS CAMPOS DEL FORMULARIO -->
        <input type="reset" value="Cancelar">

        <!-- ENVIAR LOS DATOS MEDIANTE GET -->
        <button type="submit" formmethod="get">Enviar por GET</button>

        <!-- ENVIAR LOS DATOS MEDIANTE POST -->
        <button type="submit" formmethod="post">Enviar por POST</button>
    </form>
</body>
</html>