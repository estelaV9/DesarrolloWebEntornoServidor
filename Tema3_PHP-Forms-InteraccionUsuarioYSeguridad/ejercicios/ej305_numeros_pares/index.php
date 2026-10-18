<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EJER 305: MOSTRAR LOS NUMEROS PARES DESDE 1 HASTA EL NUMERO INTRODUCIDO -->
    <title>Ejercicio 305 - Numeros Pares</title>
</head>

<body>
    <form action="" method="post">
        <label for="numero">Numero:</label>
        <input type="number" name="numero" id="numero" required
            value="<?php echo isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : ''; ?>">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!isset($_POST['numero']) || trim($_POST['numero']) == '') {
                echo "<p style='color: red;'>Error: El numero es obligatorio.</p>";
            } // VERIFICAR QUE EL NUMERO NO ESTE VACIO
            elseif (!is_numeric($_POST['numero'])) {
                echo "<p style='color: red;'>Error: Debe ingresar un numero valido.</p>";
            } // VERIFICAR QUE SEA UN NUMERO
            else {
                $numero = (int) $_POST['numero'];

                if ($numero < 2) {
                    echo "<p style='color: orange;'>Ingrese un numero mayor o igual a 2 para ver numeros pares.</p>";
                } else {
                    echo "<h3>Numeros pares del 1 al $numero:</h3>";

                    for ($i = 2; $i <= $numero; $i += 2) {
                        echo $i . "<br>";
                    } // IMPRIMIR LOS NUMEROS PARES DEL 1 AL INTRODUCIDO
                } // COMPROBAR QUE EL NUMERO SEA MAYOR O IGUAL A 2
            } // VALIDAR EL NUMERO INTRODUCIDO
        } // COMPROBAR QUE EL FORMULARIO SE HA ENVIADO POR POST
    ?>
</body>
</html>