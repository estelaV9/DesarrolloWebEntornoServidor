# Resumen de los ejercicios PHP
## [Ejercicio 1](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej201.php)
**Hola Mundo en PHP**
```Php
<?php
    echo "Hola Mundo";
    echo "<br>";
?>
```

## [Ejercicio 2](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej202_variables.php)
**Declarar 4 variables (nombre, numero1, numero2, suma (num1 + num2))**
```Php
<?php
    $nombre = "Estela";
    echo "Hola mi nombre es: " . $nombre . "<br>";

    $num1 = 5.12;
    $num2 = 3.23;
    $suma = $num1 + $num2;
    echo "La suma de " . $num1 . " + " . $num2 . " = " . $suma;
?>
```

## [Ejercicio 3](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej203_info.php)
**Ver la informacion exacta instalada del PHP**
```Php
phpinfo();
```

## [Ejercicio 4](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej204_variables_estilo%20copy.php)
**Poner en negrita el nombre y cursiva "gracias por venir"**
```Php
$nombre = "Estela";
echo "Hola <b>" . $nombre . "</b>, encantado de conocerte <br> <i>Gracias por venir!</i>";
```

## [Ejercicio 5](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej205_todas_variables.php)
**Definir 4 variables de cada tipo e imprimirlas**
```Php
$nombre = "Daniel";
$edad = 23;
$altura = 1.93;
$esestudiante = true;
$estudiante = "";

if ($esestudiante) {
    $estudiante = "SI";
} else {
    $estudiante = "NO";
}

echo "<b>con echo</b><br>";
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . "<br>";
echo "Es estudiante: " . $estudiante . "<br>";
```

## [Ejercicio 6](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej206_tabla_multiplicar.php)
**Tabla de multiplicar de x numero hasta el 10**
```Php
$i = 1;
$num = 5; // NUMERO DE LA TABLA A MULTIPLICAR
$total = 0; // CALCULAR LA MULTIPLICACION
echo "Tabla de Multiplicar del numero " . $num . " con <b>while</b>";
echo "<br><br>";

echo "<table border=1>";
while ($i <= 10) {
    $total = ($i * $num);
    echo "<tr><td>" . $num . " x " . $i . " = " . $total . "</td></tr>";
    $i++;
} // SE MUESTRA LA TABLA DEL NUMERO HASTA LA MULTIPLICACION POR 10
echo "</table>";

echo "<br><br>";

echo "Tabla de Multiplicar del numero " . $num . " con <b>for</b><br><br>";
echo "<table border=1>";
for ($j = 1; $j <= 10; $j++) {
    $total = ($j * $num);
    echo "<tr><td>" . $num . " x " . $j . " = " . $total . "</td></tr>";
} // SE MUESTRA LA TABLA DEL NUMERO HASTA LA MULTIPLICACION POR 10
echo "</table>";
```

## [Ejercicio 7](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej207_num_random.php)
**Generar un numero aleatorio del 1 al 7 y traducirlo en el dia de la semana**
```Php
$aleatorio = rand(1, 7);

switch ($aleatorio) {
    case 1:
        echo "Es lunes :(";
        break;
    case 2:
        echo "Es martes :c";
        break;
    case 3:
        echo "Es miercoles :|";
        break;
    case 4:
        echo "Es jueves :\\";
        break;
    case 5:
        echo "Es viernes :p";
        break;
    case 6:
        echo "Es sábado :D";
        break;
    case 7:
        echo "Es domingo :)";
        break;
}
```

## [Ejercicio 8](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej208_operar_num_random.php)
**Dados dos numero aleatorios (entre 1 y 10) mostrar la suma, resta, multiplicacion y division**
> [!NOTE]
> ```php
> round($division, 1)
> ```
> sirve para redondear a un decimal

```Php
$random1 = rand(1, 10);
$random2 = rand(1, 10);

$suma = $random1 + $random2;
$resta = $random1 - $random2;
$multiplicacion = $random1 * $random2;
$division = $random1 / $random2;

echo "la suma de " . $random1 . " y " . $random2 . " es: " . $suma . "<br>";
echo "la resta de " . $random1 . " y " . $random2 . " es: " . $resta . "<br>";
echo "la multiplicacion de " . $random1 . " y " . $random2 . " es: " . $multiplicacion . "<br>";
echo "la division de " . $random1 . " y " . $random2 . " es: " . round($division, 1) . "<br>";
// SE USA ROUND PARA REDONDEAR A UN DECIMAL
```

## [Ejercicio 9](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej209_comparar_random.php)
**Comparar dos numeros y decir si son iguales o el mayor**
```Php
$random1 = rand(1, 10);
$random2 = rand(1, 10);
$mayor = 0;
$es_igual = false;

if ($random1 == $random2) {
    $es_igual = true;
} else if ($random1 > $random2) {
    $mayor = $random1;
    $es_igual = false;
} else {
    $mayor = $random2;
    $es_igual = false;
}

echo "Numero aleatorio 1: " . $random1 . "<br>";
echo "Numero aleatorio 2: " . $random2 . "<br>";
if ($es_igual) {
    echo "Los numeros son iguales";
} else {
    echo "El mayor es: " . $mayor . "<br>";
}
```

## [Ejercicio 10](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej210_calcular_imc.php)
**Con dos numeros aleatorios, calcular el IMC (PESO/ALTURA^2)**
> [!WARNING]
> ```Php
>  rand()
> ```
> no acepta valores decimales
> Para hacer un numero aleatorio de numeros decimales tenemos que dividir entre 100 el resultado generado

```Php
$peso = rand(50, 100);
$altura = rand(150, 200) / 100; // RAND NO ACEPTA VALORES DECIMALES
$imc = round($peso / pow($altura, 2), 1); // TAMBIEN SE PUEDE ELEVAR CON ** exponente


echo "<h1><center>CALCULO DEL INDICE DE MASA CORPORAL</center></h1>";

echo "Actualice la pagina para mostrar un nuevo calculo<br>";
echo "Con un peso de " . $peso . " kg y una altura de " . $altura . " m, el IMC es " . $imc . "<br>";
echo "IMC: " . $peso . " / " . $altura . "^2" . " = " . $imc . "<br>";
```

## [Ejercicio 11](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej211_calculadora_descuentos.php)
**Calcular el precio final de una compra aplicando un descuento**
```Php
$totalcompra = rand(10, 120);
$total_descuento = 0; // TOTAL DEL DESCUENTO APLICADO
$compra_final = 0; // TOTAL DE LA COMPRA CON EL DESCUENTO
$descuento = 0; // VALOR DEL DESCUENTO PARA MOSTRAR QUE % DE DESCUENTO SE APLICA

if ($totalcompra > 100) {
    $descuento = 20;
} elseif ($totalcompra >= 50 && $totalcompra <= 100) {
    $descuento = 10;
} else {
    $descuento = 0;
}

$total_descuento = $totalcompra * ($descuento / 100);
$compra_final = $totalcompra - $total_descuento; // CALCULAMOS EL TOTAL

echo "Su monto gastado en la compra es de " . $totalcompra . "<br>";
echo "Se le aplica un descuento del " . $descuento . "%. Descuento total de " . $total_descuento . "<br>";
echo "quedando el total de su compra en <b>" . $compra_final . "€</b>";
```

## [Ejercicio 12](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej212_aumentar_tama%C3%B1o.php)
**Mostrar un saludo con un tamaño al azar**
```Php
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
```

## [Ejercicio 13](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej213_circulo_color.php)
**Mostrar el color del circulo al azar cada vez que se ejecute la pagina**
```Php
background-color:
    <?php
        echo "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
    ?>
;
```

## [Ejercicio 14](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej214_multiplos_cinco.php)
**Multiplos de 5**
> [!NOTE]
> ```Php
> substr($imprimir, 0, -2)
> ```
> se usa para quitar el último caracter

```Php
$imprimir = ""; // VARIABLE PARA CONCATENAR LOS MULTIPLOS
        
for ($i = 1; $i <= 30; $i++) {
    if ($i % 5 == 0) {
        $imprimir .= $i . ", "; // CONCATENAMOS LOS MULTIPLOS
    } // SI ES MULTIPLO DE 5 SE CONTATENA
} // RECORREMOS LOS NUMEROS DEL 1 AL 30

echo substr($imprimir, 0, -2); // QUITAMOS EL ULTIMO CARACTER (,)
```




<br>

---
>_Estela de Vega Martín | IES Ribera de Castilla 26/27._
