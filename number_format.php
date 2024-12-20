<?php
$cantidad1=12732.7;
$cantidad2=1931.81;

//number_format(cantidad_monetaria, cantidad_decimales, sep_decimal, sep_millar);
echo number_format($cantidad1, 2). "<br>";
echo number_format($cantidad2, 1). "<br>";
echo number_format($cantidad1, 2, "/", "*") . "<br>";

?>