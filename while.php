<?php
/**
 * La instrucción while(mientras) ejecuta una porción de programa mientras se cumpla una cierta condicion.
 * Mientras la condición sea verdadera, se ejecutan las instrucciones contenidas en el while.
 * Cuando deja de cumplirse la condición, se sale del ciclo y se continpua ejecutando el resto del programa. 
 * 
 * 
 */

//Ejemplo 1: Diseñe un programa que imprima número de 1 hasta el 20. (Incremento y decremento).
$contador=1;
while($contador<=20){
    echo $contador. "<br>";
    $contador++;
}

//Ejemplo 2: Diseñe un programa que imprima la table de multiplicar de un numero dado, desde el factor 1 hasta el 12 (Incremento y decremento).

$numero=3;
$factor=0;
while($factor<=12){
    echo $numero." x ". $factor." = ". $numero*$factor. "<br>";
    $factor++;
}

?>