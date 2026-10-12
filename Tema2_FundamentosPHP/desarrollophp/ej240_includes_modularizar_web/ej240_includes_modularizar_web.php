<?php
    // INCLUIR LA CABECERA Y EL MENU DE NAVEGACION
    include_once("includes/cabecera.php");
    include_once("includes/menu.php");
?>

<main>
    <h2>Reto: Modularizacion con PHP</h2>

    <p>
        ¡Hola, alumno! Tu mision con este codigo es modularizar la pagina.
        Si quisieramos crear una segunda pagina, como contacto.php,
        podriamos reutilizar la cabecera, el menu y el pie de pagina
        sin tener que duplicar el codigo.
    </p>

    <p><b>Instrucciones:</b></p>

    <ul>
        <li>Crea una carpeta llamada <code>includes</code>.</li>
        <li>Mueve la estructura inicial HTML y el encabezado a <code>cabecera.php</code>.</li>
        <li>Mueve el menu de navegacion a <code>menu.php</code>.</li>
        <li>Mueve el pie de pagina a <code>pie.php</code>.</li>
        <li>Utiliza include para unir todos los archivos en el orden correcto.</li>
    </ul>
</main>

<?php
    // INCLUIR EL PIE DE PAGINA Y CERRAR EL DOCUMENTO HTML
    include_once("includes/pie.php");
?>
</body>
</html>