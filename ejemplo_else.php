<?php
/**
 * 1. Calcular el total que un persona debe pagar en una
 * llantera, el precio de cada llanata es de $800 si se 
 * compran menos de 5 llantas y de $700 si se compran 5
 * o mas. 
 */
$cantidad=4;

if($cantidad<5){
    $total=$cantidad*800;
}else{
    $total=$cantidad*700;
}
echo "El total a pagar es de:  $ ".$total;




/**
 *Determinar si un alumno aprueba o reprueba un curso,
 *sabiendo que aprobara si su promedio de tres 
 *calificaciones es mayor o igual a 7.0;
 *reprueba caso contrario.
 */
$calificacion1=7;
$calificacion2=8;
$calificacion3=4;

$promedio=($calificacion1+$calificacion2+$calificacion3)/3;
if($promedio>=7){
    echo "Estudiante aprobado con calificación: ". $promedio;
}else{
    echo "Estudiante reprobado con calificación: " . $promedio;
}




?>
