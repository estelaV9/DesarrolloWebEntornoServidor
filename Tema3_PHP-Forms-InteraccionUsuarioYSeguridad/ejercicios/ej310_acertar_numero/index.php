<?php
    // INICIALIZACION DE VARIABLES
    $mensaje = "";
    $acertado = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // RECOGER DATOS DEL FORMULARIO
        $numeroUsuario = isset($_POST['numero']) ? (int) $_POST['numero'] : 0;
        $intentos = isset($_POST['intentos']) ? (int) $_POST['intentos'] : 0;
        $numeroAcertar = isset($_POST['numeroAcertar']) ? (int) $_POST['numeroAcertar'] : rand(1, 10);
    
        $intentos++; // INCREMENTAR EL CONTADOR DE INTENTOS

        if ($numeroUsuario == $numeroAcertar) {
            $mensaje = "FELICIDADES, ACERTASTE EL NUMERO " . $numeroAcertar . " A LA " . $intentos . "ª VEZ";
            $acertado = true;
        } else {
            if ($numeroUsuario < $numeroAcertar) {
                $mensaje = "EL NUMERO A BUSCAR ES MAYOR. LLEVAS " . $intentos . " INTENTO(S).";
            } else {
                $mensaje = "EL NUMERO A BUSCAR ES MENOR. LLEVAS " . $intentos . " INTENTO(S).";
            } // COMPROBAR SI EL NUMERO ES MENOR
        } // COMPROBAR SI HA ACERTADO
    } else {
        // GENERAR UN NUMERO ALEATORIO E INICIAR LOS INTENTOS
        $numeroAcertar = rand(1, 10);
        $intentos = 0;
    } // COMPROBAR EL METODO POST
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el número</title>
    <!-- EJERCICIO 310: ACERTAR UN NUMERO -->
</head>
<body>
    <section>
        <h2>JUEGO: ADIVINA EL NUMERO (DEL 1 AL 10)</h2>

        <!-- MOSTRAR EL MENSAJE DEL JUEGO -->
        <?php if (!empty($mensaje)) { ?>
            <p style="font-weight: bold; color: <?php echo $acertado ? 'green' : 'red'; ?>;">
                <?php echo $mensaje; ?>
            </p>
        <?php } ?>

        <!-- MOSTRAR EL FORMULARIO SI NO HA ACERTADO -->
        <?php if (!$acertado) { ?>
            <form action="index.php" method="POST">
                <div>
                    <label for="numero">Introduce un número:</label>
                    <input type="number" name="numero" id="numero" min="1" max="10" required>

                    <br><br>

                    <!-- CAMPO OCULTO CON EL NUMERO DE INTENTOS -->
                    <input type="number" name="intentos" value="<?php echo $intentos; ?>" hidden>

                    <!-- CAMPO OCULTO CON EL NUMERO A ADIVINAR -->
                    <input type="number" name="numeroAcertar" value="<?php echo $numeroAcertar; ?>" hidden>
                </div> <br>

                <div>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Restablecer">
                </div>
            </form>
        <?php } else { ?>
            <!-- PERMITIR VOLVER A JUGAR -->
            <a href="index.php">VOLVER A JUGAR</a>
        <?php } ?>
    </section>
</body>
</html>