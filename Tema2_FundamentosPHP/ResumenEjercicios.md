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


## [Ejercicio 15](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej215_cuatro_circulos_color.php) **Círculo con color aleatorio**
**Pintar 4 divs de clase circulo con un bucle de 4 iteraciones, dando a cada uno un color aleatorio**
> [!NOTE]
> ```php
> $color = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")"
> ```
> rand(0, 255) tres veces genera un color RGB aleatorio en cada iteración

```php
$iteracciones = 0;
while ($iteracciones < 4) {
    // DECLARAMOS DENTRO EL COLOR PARA QUE CADA CIRCULO TENGA UN COLOR DIFERENTE
    $color = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
    echo "<div class='circulo' style='background-color: " . $color . ";'></div>";
    $iteracciones++;
} // CONSTRUIMOS 4 CIRCULOS
```

## [Ejercicio 16](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej216_cara_cruz/ej216_cara_cruz.php) **Cara o cruz**
**Mostrar la cara de la moneda (cara o cruz) que haya salido aleatoriamente**
> [!NOTE]
> ```php
> $source = ($caraocruz == 0) ? "assets/cara_moneda.jpg" : "assets/cruz_moneda.jpg"
> ```
> operador ternario: condición ? valor_si_true : valor_si_false

```php
$caraocruz = rand(0, 1); // ELIGE ALEATORIAMENTE QUE PARTE DE LA MONEDA ENSEÑA
// SEGUN LA CARA SE MUESTRA UNA RUTA DE IMAGEN U OTRA
$source = ($caraocruz == 0) ? "assets/cara_moneda.jpg" : "assets/cruz_moneda.jpg";
echo "<img src='" . $source . "' width='200px'>"; // SE IMPRIME LA IMAGEN CON LA RUTA ELEGIDA
```

## [Ejercicio 17](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej217_dado/ej217_dado.php) **Dado**
**Mostrar la cara del dado que haya salido al azar**
```php
$caradado = rand(1, 6);
echo "<img src='assets/cara" . $caradado . ".png' width='200px'>";
```

## [Ejercicio 18](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej218_suma_dados/ej218_suma_dados.php) **Suma de dos dados**
**Lanzar dos dados y mostrar la suma de sus caras**
```php
$suma = 0;
for ($i = 0; $i < 2; $i++) {
    $caradado = rand(1, 6);
    $suma += $caradado;
    echo "<img src='assets/cara" . $caradado . ".png' width='200px'>";
}
echo "TOTAL: " . $suma;
```

## [Ejercicio 19](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej219_perfil_cliente.php) **Descuento según cliente**
**Calcular el total a pagar por una compra aplicando un descuento según el perfil del cliente (edad 0-100): jubilado (65 años o más) 25% de descuento, estudiante ESO (12-16 años) 15% de descuento, el resto de edades sin descuento**
> [!NOTE]
> ```php
> $importe_final = $importe_compra - ($importe_compra * $descuento / 100);
> ```
> Calcular descuento

```php
$importe_compra = rand(1, 200);
$edad = rand(0, 100);
$descuento = 0; // INICIALIZAMOS A 0
$importe_final = 0;
$categoria = "nada"; // INICIALIZAMOS A "nada"

if ($edad >= 65) {
    $descuento = 25;
    $categoria = "jubilado";
} elseif ($edad >= 12 && $edad <= 16) {
    $descuento = 15;
    $categoria = "estudiante";
}

$importe_final = $importe_compra - ($importe_compra * $descuento / 100); // CALCULAMOS EL TOTAL

// IMPRIMIMOS LOS RESULTOS
echo "<b>Importe original de la compra: </b>" . $importe_compra . "</br>";
echo "<b>Categoria: </b>" . $categoria . "</br>";
echo "<b>Descuento aplicado: </b>" . $descuento . "%</br>";
echo "<b>Total a pagar: </b>" . round($importe_final, 2) . "</br>";
```

## [Ejercicio 20](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej220_array_personas.php) **Array de personas**
**Crear un array con cinco nombres de personas y recorrerlo con un bucle for mostrando el texto "Conozco a alguien llamado"**
```php
$personas = ["Juan", "Daniel", "Paula", "Sergio", "Esteban"];

for ($i = 0; $i < count($personas); $i++) {
    echo "<p>Conozco a alguien llamado " . $personas[$i] . "</br>";
} // RECORREMOS TODOS LOS NOMBRES DE LA LISTA
```

## [Ejercicio 21](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej221_array_enteros.php) **Array de enteros con funciones**
**Crear un programa que genere un array de números enteros y lo muestre por pantalla, utilizando 2 funciones: crearArray e imprimeArray**
> [!NOTE]
> ```php
> function crearArray($n, $min, $max) { ... return $numeros; }
> function imprimeArray($array) { ... }
> ```
> se separa la lógica en dos funciones reutilizables: una que crea y devuelve el array, y otra que lo recorre e imprime

```php
function crearArray($n, $min, $max) {
    $numeros = [];
    for ($i = 0; $i < $n; $i++) {
        $numeros[$i] = rand($min, $max);
    } // RECORREMOS LOS NUMEROS AÑADIENDO UNO ALEATORIO
    return $numeros;
} // FUNCION QUE DEVUELVE UN ARRAY CON N NUMEROS DE ENTRE UN MAXIMO Y UN MINIMO

function imprimeArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        echo "<p>Numero: " . $array[$i] . "</br>";
    } // RECORREMOS TODOS LOS NUMEROS DE LA LISTA
} // FUNCION QUE IMPRIME LOS NUMEROS DE ESE ARRAY

// LLAMAMOS A LA FUNCION PARA IMPRIMIR LA LISTA DE 10 NUMEROS ALEATORIOS DEL 1 AL 20
imprimeArray(crearArray(10, 1, 20));
```

## [Ejercicio 22](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej222_recorrer_array_ciudades.php) **Recorrer array de ciudades**
**Recorrer un array de ciudades (Madrid, Barcelona, Londres, New York, Los Ángeles, Chicago) y mostrar por pantalla el índice y el nombre de cada ciudad**
> [!NOTE]
> ```php
> foreach ($ciudades as $indice => $valor) {...}
> ```
> foreach con clave => valor permite recorrer un array obteniendo a la vez el índice y el valor sin usar count()

```php
// CREAR ARRAY DE CIUDADES
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($ciudades as $indice => $valor) {
    echo "La ciudad con el indice: $indice tiene el nombre de $valor.<br></br>";
} // RECORRER EL ARRAY MOSTRANDO EL INDICE Y EL VALOR
```

## [Ejercicio 23](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej223_suma_media_indices_pares.php) **Suma y media de índices pares**
**Crear un array de 10 números enteros, sumar los valores en índices pares, mostrar los valores en índices impares y calcular la media de los valores en índices pares**
> [!NOTE]
> ```php
> if ($i % 2 === 0) {...}
> ```
> el operador % (módulo) sobre el índice permite distinguir posiciones pares de impares dentro del recorrido

```php
$arrayEnteros = [1,2,3,4,5,6,7,8,9,10]; // CREAR ARRAY DE NUMEROS ENTEROS

// INICIALIZAR VARIABLES PARA LA SUMA Y EL CONTADOR
$suma = 0;
$contador = 0;

for ($i = 0; $i < count($arrayEnteros); $i++) {
    if ($i % 2 === 0) {
        $suma += $arrayEnteros[$i];
        $contador++;
    } else {
        // SI EL INDICE ES IMPAR, MOSTRAR EL VALOR
        echo "Indice $i: " . $arrayEnteros[$i] . "<br></br>";
    } // COMPROBAR SI EL INDICE ES PAR
} // RECORRER EL ARRAY

// CALCULAR LA MEDIA DE LOS VALORES DE LOS INDICES PARES
$media = $suma / $contador;

echo "La media es: " . $media; // MOSTRAR LA MEDIA
```

## [Ejercicio 24](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej224_unir_arrays_array_merge.php) **Unir arrays con array_merge**
**Crear tres arrays (números, animales y árboles), unirlos en uno nuevo y mostrar todos sus elementos con su posición**
> [!NOTE]
> ```php
> $resultado = array_merge($array1, $array2, $array3)
> ```
> une varios arrays en uno nuevo, reindexando las claves numéricas

```php
// CREAR LOS TRES ARRAYS
$array1 = [12,34,45,52,12];
$array2 = ["Lagartija","Araña","Perro","Gato","Ratón"];
$array3 = ["Sauce","Pino","Naranjo","Chopo","Perro","34"];

// UNIR LOS TRES ARRAYS EN UNO NUEVO
$resultado = array_merge($array1, $array2, $array3);

for ($i = 0; $i < count($resultado); $i++) {
    echo "Elemento en la posición $i: " . $resultado[$i] . "<br>";
} // RECORRER Y MOSTRAR EL ARRAY RESULTANTE
```

## [Ejercicio 25](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej225_unir_arrays_array_push.php) **Unir arrays con array_push**
**Crear tres arrays (números, animales y árboles), crear un cuarto array vacío y añadir todos los elementos de los tres arrays utilizando array_push, mostrando el array resultante**
> [!NOTE]
> ```php
> array_push($resultado, $array1[$i])
> ```
> añade un elemento al final del array indicado, a diferencia de array_merge que une arrays completos de golpe

```php
// CREAR LOS TRES ARRAYS
$array1 = [12,34,45,52,12];
$array2 = ["Lagartija","Araña","Perro","Gato","Ratón"];
$array3 = ["Sauce","Pino","Naranjo","Chopo","Perro","34"];

// CREAR ARRAY VACIO PARA GUARDAR TODOS LOS ELEMENTOS
$resultado = [];

for ($i = 0; $i < count($array1); $i++) {
    array_push($resultado, $array1[$i]);
} // AÑADIR LOS ELEMENTOS DEL PRIMER ARRAY

for ($i = 0; $i < count($array2); $i++) {
    array_push($resultado, $array2[$i]);
} // AÑADIR LOS ELEMENTOS DEL SEGUNDO ARRAY

for ($i = 0; $i < count($array3); $i++) {
    array_push($resultado, $array3[$i]);
} // AÑADIR LOS ELEMENTOS DEL TERCER ARRAY

var_dump($resultado); // MOSTRAR EL ARRAY COMPLETO

/* for ($i = 0; $i < count($resultado); $i++) {
    echo "Elemento en la posicion $i: " . $resultado[$i] . "<br>";
} // MOSTRAR LOS ELEMENTOS DEL ARRAY UNO POR UNO */
```

## [Ejercicio 26](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej226_anadir_eliminar_elementos_array.php) **Añadir y eliminar elementos de un array**
**Crear un array de animales, añadir el elemento "Periquito" al final y mostrar el array, después eliminar el elemento del índice 1 y mostrar de nuevo el array**
> [!NOTE]
> ```php
> unset($array[1])
> ```
> elimina un elemento del array por su índice, pero no reindexa los que quedan

```php
$array = ["Lagartija","Araña","Perro","Gato","Ratón"]; // CREAR ARRAY

// AÑADIR "PERIQUITO" AL FINAL DEL ARRAY
array_push($array, "Periquito");

// MOSTRAR EL ARRAY DESPUES DE AÑADIR EL ELEMENTO
var_dump($array);

// ELIMINAR EL ELEMENTO CON INDICE 1
unset($array[1]);

// MOSTRAR EL ARRAY DESPUES DE ELIMINAR EL ELEMENTO
var_dump($array);
```

## [Ejercicio 27](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej227_array_asociativo_stock_productos.php) **Array asociativo stock de productos**
**Crear un array asociativo llamado stock_productos con claves (códigos de producto) y valores (cantidad en stock): A45:15, B10:250, C99:5, D01:150. Añadir un elemento final E50:75, eliminar C99:5 y listar por pantalla el array**
> [!NOTE]
> ```php
> $stock_productos = ["A45" => 15, "B10" => 250, ...]
> ```
> array asociativo: las claves son texto (código de producto) en vez de índices numéricos; se accede y modifica igual que uno indexado pero usando esa clave

```php
$stock_productos = [
    "A45" => 15,
    "B10" => 250,
    "C99" => 5,
    "D01" => 150
]; // CREAR ARRAY CON LAS CLAVES

$stock_productos["E50"] = 75; // AÑADIR UN ELEMENTO FINAL

unset($stock_productos["C99"]); // ELIMINAR C99:5

// print_r($stock_productos);
foreach ($stock_productos as $clave => $stock) {
    echo "Clave: " . $clave . " - Stock: " . $stock . "<br>";
} // LISTAR POR PANTALLA EL ARRAY
```

## [Ejercicio 28](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej228_ordenar_array_asociativo.php) **Ordenar array asociativo**
**Ordenar el array asociativo stock_productos por clave o por valor, en orden ascendente y descendente**
> [!NOTE]
> ```php
> ksort() / krsort() / asort() / arsort()
> ```
> ```ksort``` ordena por clave ascendente, ```krsort``` por clave descendente, ```asort``` por valor ascendente y ```arsort``` por valor descendente, todas conservando la relación clave-valor. **sort()** y **rsort()** NO valen para arrays asociativos porque reindexan las claves

```php
$stock_productos = [
    "A45" => 15,
    "B10" => 250,
    "C99" => 5,
    "D01" => 150
]; // CREAR ARRAY CON LAS CLAVES

function imprimir($array){
    return print_r($array);
} // FUNCION PARA IMPRIMIR EL ARRAY

// ORDENAR POR INDICE ASCENDENTE
echo "</br><h3>Funcion ksort - indice ascendente</h3>";
ksort($stock_productos);
imprimir($stock_productos);

// ORDENAR POR INDICE DESCENDIENTE
echo "</br></br><h3>Funcion krsort - indice descendente</h3>";
krsort($stock_productos);
imprimir($stock_productos);

// ORDENAR POR VALOR ASCENDENTE
echo "</br></br><h3>Funcion asort() - valor ascendente</h3>";
asort($stock_productos);
imprimir($stock_productos);

// ORDENAR POR VALOR DESCENTDENTE
echo "</br></br><h3>Funcion arsort() - valor descendente</h3>";
arsort($stock_productos);
imprimir($stock_productos);

// LAS FUNCIONES SORT Y ARSORT NO VALEN PARA LOS ARRYAS ASOCIATIVOS
```

## [Ejercicio 29](https://github.com/estelaV9/DesarrolloWebEntornoServidor/blob/master/Tema2_FundamentosPHP/desarrollophp/ej229_array_asociativo_carrito.php) **Array asociativo carrito**
**Crear un array asociativo carrito donde los índices son los nombres de los productos y los valores sus precios, calcular el subtotal, aplicar un 10% de descuento si supera los 50€ y mostrar el desglose, subtotal, descuento y precio final**
> [!NOTE]
> ```php
> foreach ($carrito as $clave => $precio) {
> ```
> foreach array asociativo del carrito

```php
$carrito = [
    "Auriculares Bluetooth" => 29.99,
    "Raton inalambrico" => 15.50,
    "Alfombrilla gamer" => 12.00,
    "teclado mecanico" => 45.00
]; // CREAR ARRAY CON LAS CLAVES

// CALCULAR EL PRECIO TOTAL (SUMAR LOS PRECIOS DE TODOS LOS PRODUCTOS
$subtotal = 0;
$total = 0;
$descuento = 0;

foreach ($carrito as $clave => $precio) {
    $subtotal += $precio;
} // VAMOS SUMANDO LOS PRECIOS DE CADA PRODUCTO

// APLICAR UN DESCUENTO DEL 10% SU SUPERAL LOS 50 EUROS
if ($subtotal >= 50) $descuento = $subtotal * 0.1;

$total = $subtotal - $descuento; // RESTAMOS EL DESCUENTO

// MOSTRAR POR PANTALLA
//   - EL DESGLOSE DE LOS PRODUCTOS (IMPRIMIR EL ARRAY ASOCIATIVO)
//   - EL SUBTOTAL
//   - EL DESCUENTO APLICADO (SI CORRESPONDE)
//   - PRECIO FINAL A PAGAR
echo "<b>Desglose de los productos</b> </br>";
echo print_r($carrito) . "</br>";
echo "<b>Subtotal</b> " . round($subtotal, 2) . "</br>";
echo "<b>Descuento aplicado</b> " . round($descuento, 2) . "</br>";
echo "<b>Precio final a pagar</b> " . round($total, 2);
```





<br>

---
>_Estela de Vega Martín | IES Ribera de Castilla 26/27._
