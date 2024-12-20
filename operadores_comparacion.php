<?php
/**
 * Los operadores de comparación compara dos expresiones y devuelven un valor booleano que puede ser TRUE(1) o FALSE(0).
 * Igual: ==             No idéntico: !==
 * Identico: ===         Menor que: < 
 * diferente: !=         Mayor que: >
 * diferente: <>         Menor o igual que: <=       Mayor o igual que: >=
 * 
 * Estos operadores toman en cuenta el valor no el tipo de dato con excepción del operdor "no identico"<div class=""></div>
 * 
 * 
 */

var_dump(2=="1"); //false

$valor1=9;
var_dump($valor1<>"9"); //false

$valor2=2;
var_dump($valor2!=="2"); //true


?> 