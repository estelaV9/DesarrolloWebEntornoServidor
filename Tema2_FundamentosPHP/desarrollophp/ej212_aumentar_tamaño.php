<html>

<head>
    <!-- EJER 12: CADA VEZ QUE SE EJCUTE LA PAGINA MUESTER UN SALUDO A UN TAMAÑO ELEGIDO AL AZAR  ENTRE 200% Y 800$% -->
    <title>Ejercico210</title>
    <style>
        h1 { text-align: center; }

        h2 {
            /* SOLO METEMOS EN EL PHP EL VALOR DEL ATRIBUTO */
            font-size:
                <?php
                    $variable = rand(200, 800);
                    echo $variable; // SOLO SE MODIFICA EL VALOR
                ?>
                %;
            border: 2px solid;
            width: fit-content;
        }

        body { background-color: lightgray; }
    </style>
</head>

<body>
    <h1>SALUDO</h1>
    <p>Actualice la página para cambiar el tamaño del saludo.</p>
    <h2>¡Hola!</h2>
</body>

</html>