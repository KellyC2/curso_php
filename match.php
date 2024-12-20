<?php
/**
 * La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor. 
 * De forma similar a una sentencia switch, una expresión match tiene uan expresión de sujeto
 * que se comprar con múltiples altenativas.
 * 
 * Adiferencia de switch, la comparación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil(==).
 * Las expresiones match están disponibles a partir de PHP 8.0.0.
 * 
 * 
 * 
 */
//Ejemplo 1
$a=9;
$x=10;
$y=9;
$z=7;
$resultado=match($a){
    $x, $y =>"Valor igual a X o Y",
    $z=>"Valor igual a Z",
    default=>"No coincide con ninguna variable"
};
echo $resultado;

//Ejemplo 2

$edad=80;
$estado=match(true){
    $edad>=60 =>"Eres de la tercera edad",
    $edad>=30 => "Eres adulto",
    $edad>=18 => "Eres adulto joven",
    default => "Eres un niño"
};
echo $estado;



?>