<?php
date_default_timezone_set("America/Lima");

$fecha_us=date("Y-m-d");
$fecha_usText = date("l d F Y");
$fecha_es=date("d-m-Y");
echo $fecha_us;
echo $fecha_es;
echo $fecha_usText;


//Formateo de hora
$hora_12=date("h:i a");

echo $hora_12;

$hora_24 = date("H:i ");
echo $hora_24;


$fecha_completa=date("d-m-Y h:i A");
echo $fecha_completa;

?>