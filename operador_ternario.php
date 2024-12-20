<?php
/**
 * El operador ternario puede considerarse como una instruccion if de una sola linea. Se compone de tres partes.El operator y dos resultados. 
 * La sintaxis es la siguiente:
 * <operator>?<true value>:<false value>
 * 
 * 
 */

$total= (12>7)?10*7:10*5;
echo $total;

/**
 * Ejercicio (OPERADOR TERNARIO)
 * Hacer un programa que calcule el total a pagar por la compra de camisas. 
 * Si se compran tres camisas o mas se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10%. 
 * 
 */
$camisas=7;
$precio=10;
$total= $camisas*$precio;

$total=$camisas>=3 ?$total-($total*0.20):$total-($total*0.10);
echo "El total a pagar es: ".$total;

?>