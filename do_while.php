<?php
/**
 * La estructura repetitiva do-while(hacer-mientras) es muy similar a la estructura while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar de al principio.
 * 
 * 
 */

//Ejemplo 1: Diseñe un programa que imprima número de 1 hasta el 20. (Incremento y decremento).
//Incremento
$c=1;
do{
    echo $c. "<br>";
    $c++;

}while($c<=20);

//Decremento
$c = 20;
do {
    echo $c . "<br>";
    $c--;
} while ($c >=1);


//Ejemplo 2: Diseñe un programa que imprima la table de multiplicar de un numero dado, desde el factor 1 hasta el 12 (Incremento y decremento).
//Incremento
$numero = 5;
$factor = 0;
do {
    echo $numero . " x " . $factor . " = " . $numero * $factor . "<br>";
    $factor++;
}
while ($factor <= 12);

//Decremento
$numero = 3;
$factor = 12;
do {
    echo $numero . " x " . $factor . " = " . $numero * $factor . "<br>";
    $factor--;
} while ($factor >=1);




?>