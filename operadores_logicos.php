<?php
/** OPERADORES LÓGICOS
 * Nos permiten combinar expresiones simples en expresiones mas complejas, estas expresiones se evaluasn y devuelven un valor booleano. 
 * and  (y)   : Basta un false para hcer falso la expresion.
 * or   (o)   : mientras tenga un verdadero va a mostrar verdadero 
 * !    (Not) : Devuelve el valor contrario
 *  &&  (y)
 *  ||  (o)
 * 
 */ 
$valor1=7;
$valor2=2;

var_dump($valor1==7 && 2>3);

var_dump($valor1 == 7 || 2 > 3);

var_dump(!($valor1 == 7 || 2 > 3));

?>