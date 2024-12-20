<?php
$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("/", $fecha_1);
echo $array_fecha[1];

$array_fecha=explode("-",$fecha_2);
echo $array_fecha[2];

$array_fecha = explode(" ", $numeros, 2); //(delimitador, string a dividir, limitador de # elementos)
echo $array_fecha[1];



?>