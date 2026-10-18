<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 308: CREAR UN FORMULARIO PARA DAR DE ALTA UNA VIVIENDA -->
    <title>Alta de vivienda</title>
</head>

<body>
    <h2>Alta de vivienda</h2>

    <form method="post" action="formvivienda.php">
        <fieldset>
            Selecciona el tipo de vivienda:
            <select name="vivienda" required>
                <option value="adosado">Adosado</option>
                <option value="unifamiliar">Unifamiliar</option>
                <option value="piso">Piso</option>
            </select> <br>

            Selecciona la zona:
            <select name="zona">
                <option value="Centro">Centro</option>
                <option value="Periferia">Periferia</option>
            </select> <br>

            Introduce dirección:
            <input type="text" name="direccion"> <br>

            Selecciona nº de habitaciones:
            1 <input type="radio" name="habitaciones" value="1">
            2 <input type="radio" name="habitaciones" value="2">
            3 <input type="radio" name="habitaciones" value="3"> <br>

            Introduce precio:
            <input type="number" name="precio" min="0.01" step="any" required> <br>

            Introduce tamaño:
            <input type="number" name="tamano" min="0" step="any"> <br>

            Selecciona los extras que necesites:
            <input type="checkbox" name="Garaje" value="Garaje">Garaje
            <input type="checkbox" name="Trastero" value="Trastero">Trastero
            <input type="checkbox" name="Piscina" value="Piscina">Piscina <br>

            <textarea name="observaciones" cols="50" rows="10"></textarea> <br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>