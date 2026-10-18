<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 307: PERSONALIZAR UN TEXTO MEDIANTE UN FORMULARIO -->
    <title>Personalizar texto</title>
</head>

<body>
    <section style="display: block; width: 90%; min-width: 350px; margin: 0 auto;">
        <h1>Personalizar texto</h1>

        <form action="procesar_formulario.php" method="POST">
            <div>
                <label for="texto">Texto: </label>
                <input type="text" name="texto" id="texto" required>
            </div>

            <div>
                <label for="tamanio">Tamaño:</label>
                <input type="number" name="tamanio" id="tamanio" min="1" max="100" value="16" required>
            </div>

            <div>
                <label for="color">Color: </label>
                <input type="color" name="color" id="color" value="#e66465" required>
            </div>

            <div>
                Tipo de letra:
                <input type="radio" name="tipoletra" value="sans-serif" checked required>Sans-serif
                <input type="radio" name="tipoletra" value="serif">Serif
                <input type="radio" name="tipoletra" value="monospace">Monospace
                <input type="radio" name="tipoletra" value="cursive">Cursive
            </div>

            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Restablecer">
            </div>
        </form>
    </section>
</body>
</html>