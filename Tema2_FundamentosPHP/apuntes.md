# Fundamentos de PHP
 
## 1. Introducción
El código PHP se escribe entre las etiquetas `<?php ... ?>` dentro de un archivo HTML. **`echo`** y **`print`** son construcciones del lenguaje para mostrar datos en pantalla:
 
```php
<?php
echo "Hola, soy un script PHP!";
?>
```
 
<br>
 
## 2. Cadenas de texto (strings)
Se delimitan con comillas simples o dobles
- **Concatenar:** el operador punto (`.`) une dos o más cadenas, incluso con variables, funciones o expresiones que no son texto
- **Caracteres especiales:** para escribir una comilla del mismo tipo que delimita la cadena, se escapa con la barra invertida (`\`); por ejemplo `\$` imprime el símbolo `$` sin interpretarlo como variable
 
<br>
 
## 3. Variables y constantes
- **Variables:** almacenan información y se identifican por su nombre. Reglas:
  - Deben empezar por el símbolo `$`
  - El primer carácter tras el `$` debe ser una letra o `_`; el resto puede incluir letras, números o `_`
  - Son **case-sensitive** (distinguen mayúsculas de minúsculas)

- **Constantes:** almacenan un valor fijo que no puede modificarse:
```php
define(NOMBRE_CONSTANTE, VALOR_CONSTANTE);
```
 
<br>
 
## 4. Tipos de datos
No es necesario declarar el tipo de una variable. Tipos básicos:
| Tipo | Descripción |
|---|---|
| int / long | Enteros |
| float / double | Decimales |
| char | Caracteres |
| string | Cadenas |
| boolean | Solo `true` / `false`; muy usado en estructuras de control |
| array | Matrices |
 
**Casteo (conversión de tipos):**
```php
$foo = (int) $bar;
```
Casts disponibles: `(int)`, `(bool)`, `(float)`, `(string)`, `(array)`, `(object)`
 
**Asignación:** se usa el operador `=`. Con números se pueden usar operadores aritméticos; con cadenas, el operador de concatenación (`.`)

**Depuración:** `var_dump()` imprime el valor y el tipo de una variable
 
<br>
 
## 5. Operadores
| Tipo | Descripción |
|---|---|
| **Aritméticos** | `+`, `-`, `*`, `/`, `%` (resto), `**` (potencia); incluyen incremento/decremento `++`/`--` (pre o post, según se coloque antes o después de la variable) |
| **Lógicos** | Comparan valores booleanos para crear condiciones (`&&`, `\|\|`, `!`, etc) |
| **De comparación** | Comparan dos valores (texto, numérico, booleano...) y devuelven `true`/`false`, usados para tomar decisiones |
 
<br>
 
## 6. Estructuras de control
Modifican el flujo secuencial de ejecución. Se dividen en **condicionales** e **iterativas**, y pueden anidarse entre sí
 
### 6.1 Condicionales (if, switch)
**if:** ejecuta un bloque si la condición es verdadera
```php
if ($edad >= 18) {
    echo "Eres mayor de edad. Puedes votar.";
}
```
 
**if / else:** ejecuta un bloque u otro según la condición
```php
if ($hora < 12) {
    echo "Buenos días.";
} else {
    echo "Buenas tardes o noches.";
}
```
 
**Anidación con elseif:**
```php
if ($nota >= 90) {
    echo "Sobresaliente";
} elseif ($nota >= 80) {
    echo "Notable alto";
} else {
    echo "Reprobado";
}
```
 
**Operador ternario:** resume un if-else en una línea
```php
(condición) ? valor_si_verdadero : valor_si_falso;
$estatus = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
```
 
**switch:** equivale a un if/elseif que compara una misma condición con distintos valores; puede incluir una cláusula `default` para cuando no coincide ningún `case`
 
### 6.2 Iterativas (while, do-while, for, foreach)
| Estructura | Comportamiento |
|---|---|
| **while** | Evalúa la condición antes de ejecutar; se repite mientras sea verdadera |
| **do-while** | Ejecuta el bloque una vez y luego evalúa la condición (salida al final) |
| **for** | Repite un número determinado de iteraciones mediante un contador |
| **foreach** | Recorre cada elemento de un array |
 
```php
$i = 1;
while ($i <= 3) {
    echo "El numero es: " . $i . "<br>";
    $i++;
}
```
```php
$i = 1;
do {
    echo "El número es " . $i . "<br>";
    $i++;
} while ($i <= 3);
```
 
> Existen también las sentencias `break` (corta el bucle) y `continue` (salta a la siguiente iteración)
 
<br>
 
## 7. Arrays
Permiten almacenar varios datos a la vez, accesibles mediante un índice numérico o de texto
 
### 7.1 Arrays indexados
Los índices son numéricos, empiezan en 0 y aumentan secuencialmente
```php
$semana = ["Lunes", "Martes", "Miércoles"];
```
- **Añadir:** indicando el índice al asignar, o con `array_push($semana, 'Nuevo dia')` (al final)
- **Modificar:** `$semana[6] = "Dia de la iglesia";`
- **Borrar:** `unset($semana[0])` (elimina ese índice) o `array_pop($array)` (elimina el último)

### 7.2 Arrays asociativos
Usan claves de texto (no correlativas ni numéricas) con la notación `clave => valor`:
```php
$persona = ["nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid"];
echo $persona["nombre"]; // Juan
```
- **Añadir:** `$array[$indice] = $valor;`
- **Eliminar:** `unset($array[$indice]);`
- **Ordenar:** `ksort()`/`krsort()` por clave (asc/desc), `asort()`/`arsort()` por valor (asc/desc)

### 7.3 Arrays multidimensionales
Arrays que contienen otros arrays, para organizar datos en varias dimensiones:
```php
$estudiantes = [
    ["nombre" => "Ana", "curso" => "PHP"],
    ["nombre" => "Luis", "curso" => "JavaScript"]
];
echo $estudiantes[0]["nombre"]; // Ana
```
 
### 7.4 Recorrer un array
Con `for` (usando `count()` para el límite) o con `foreach` (valor, o clave => valor). Con arrays multidimensionales se anidan dos `foreach`:
```php
foreach ($array as $clave => $valor) {
    echo "Clave: $clave => Valor: $valor\n";
}
```
 
### 7.5 Funciones de arrays más usadas 
| Función | Qué hace |
|---|---|
| `sort()`, `asort()`, `ksort()` | Ordenan el array |
| `count()` | Cuenta el número de elementos |
| `print_r($array)` | Imprime los valores del array (legible) |
| `is_array()` | Comprueba si una variable es un array |
| `in_array()` | Comprueba si un valor existe en el array |
| `array_push()` / `array_pop()` | Añaden al final / eliminan el último |
| `range($bajo, $alto)` | Genera un array con el rango indicado |
| `array_merge()` | Combina dos o más arrays en uno |
| `shuffle()` | Mezcla los elementos aleatoriamente |
| `array_key_first()` / `array_key_last()` | Primera / última clave del array |
| `reset()` / `end()` | Mueven el puntero interno al primer / último elemento |
| `max()` / `min()` | Valor máximo / mínimo |
| `array_sum()` | Suma todos los elementos |
| `array_values()` / `array_keys()` | Devuelven los valores / las claves del array |
| `array_search()` | Busca un valor y devuelve su clave (o `false`) |
| `array_unique()` | Elimina duplicados |
| `array_reverse()` | Invierte el orden de los elementos |
| `explode()` / `implode()` | Convierten string ↔ array por un separador |
 
**Convertir un string en array** con `preg_split()` (separando por comas, espacios, o cualquier patrón, incluso carácter a carácter):
```php
$claves = preg_split("/[\s,]+/", "hypertext language, programming");
// Array ( [0] => hypertext [1] => language [2] => programming )
```
 
---
 
## 8. Funciones y procedimientos definidos por el usuario
Se declaran con la palabra `function`, seguida del nombre, los parámetros entre paréntesis y el cuerpo entre llaves
- Las **funciones** devuelven un valor con `return` (se pueden empaquetar varios valores en un array/objeto); tras el `return`, la función termina inmediatamente, y el código posterior no se ejecuta
- Los **procedimientos** no tienen `return`; ejecutan su tarea y terminan
- Los argumentos suelen pasarse **por valor**: PHP copia el valor de la variable al parámetro, por lo que modificarlo dentro de la función no afecta a la variable original; no es obligatorio indicar el tipo de los parámetros
```php
/**
 * Función que suma dos números.
 * @param int $a Primer número.
 * @param int $b Segundo número.
 * @return int Suma de los números.
 */
function sumar($a, $b) {
    return $a + $b;
}
```
 
> Es buena práctica documentar las funciones con comentarios explicando qué hacen, qué reciben y qué devuelven
 
<br>
 
## 9. Funciones integradas
### 9.1 Aritméticas 
| Función | Qué hace |
|---|---|
| `abs()` | Valor absoluto |
| `pow()` | Potencia |
| `max()` / `min()` | Valor más alto / más bajo |
| `rand()` | Número aleatorio |
| `sqrt()` | Raíz cuadrada |
| `decbin()` / `bindec()` | Decimal ↔ binario |
| `dechex()` / `hexdec()` | Decimal ↔ hexadecimal |
| `floor()` / `ceil()` / `round()` | Redondeo hacia abajo / arriba / al más cercano (con decimales) |
 
### 9.2 Para cadenas
| Función | Qué hace |
|---|---|
| `strlen($cadena)` | Número de caracteres |
| `trim()`, `ltrim()`, `rtrim()` | Eliminan espacios en blanco (ambos lados, izquierda, derecha) |
| `strrev()` | Invierte una cadena |
| `str_repeat()` | Repite una cadena n veces |
 
### 9.3 Para arrays
Además de las vistas en el punto 7.5: `array()` (crea un array), `array_merge()`, `array_values()`, `array_keys()`, `in_array()`, `count()`, `array_pop()`, `array_push()`, `array_search()`, `array_unique()`, `array_reverse()`
 
<br>
 
## 10. `include` y `require`
Permiten incorporar código de otros archivos (bibliotecas de funciones) al archivo actual:
| Sentencia | Si el archivo no se encuentra |
|---|---|
| **include** | Error de ejecución, pero el script continúa |
| **require** | Error de ejecución y el script se detiene |
 
Las variantes **`include_once`** y **`require_once`** evitan incluir el mismo archivo más de una vez, previniendo errores por redefinición de funciones (habitual en proyectos grandes con varios scripts que comparten bibliotecas):
 
```php
// index.php
include 'header.php';
echo "<p>Aquí va el contenido principal</p>";
include 'footer.php';
```

<br>

---
>_Estela de Vega Martín | IES Ribera de Castilla 26/27._
