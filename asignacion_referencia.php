<?php 
/**
 * ASIGNACIÓN POR REFERENCIA
 * Asignación por referencia significa que ambas variable terminan apuntando a los mismos datos y nada es copiado en ninguna parte
 * 
 */
$texto="El Salvador";
$variable_1=$texto;//copia el valor 
$variable_2= &$texto;//copia la referencia a la variable

echo $variable_1;

$texto="Carlos Alfaro";

echo $variable_1;

echo $variable_2;


?>