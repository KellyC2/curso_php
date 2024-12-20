<?php
/**
 * elseif, es una combinación de if else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente 
 * en caso que la expresion if priginal se evalue como false.Sin embargo, a diferencia de else, esa expresión alternativa sólo se
 * ejecutará si la expresion condicional del elseif se evalua con TRUE
 * 
 * if(){                      
 *  
 * }elseif(){
 *      
 * }else{
 *      
 * }
 * NOTA: Tenga en cuenta que elseif y else if seran considerdos exactamente iguales sólamente cuando se utilizan llaves como en el 
 * en el ejemplo anterior.al utilizar los dos puntos para definir las condiciones if/elseif, no debe separarse else if en dos
 * palabras o PHP fallara con un error del interprete.
 *  
 */

 //Ejericio1: Se desea diseñar un programa que escriba los nombres de los días de la semana ern función del valor de una variable DIA.

$dia= 4;
if($dia==1){
    echo "LUNES";
}elseif($dia==2){
    echo "MARTES";
}elseif ($dia == 3) {
    echo "MIERCOLES";
} elseif ($dia == 4) {
    echo "JUEVES";
}elseif ($dia == 5) {
    echo "VIERNES";
}elseif ($dia == 6) {
    echo "SÁBADO";
}elseif ($dia == 7) {
    echo "DOMINGO";
}else{
    echo "No es un valor no válido";
}


//Ejercicio 2: En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de computadoras que
//compre. Si las computadoras son menos de cinco se les dará un 10% de descuento sobre el total de la compra; si el número de computadoras
//es mayor o igual a cinco pero menos de 10 se les otorgara un 20% de descuento; y si son 10 o más se les da un 40% de descuentp.
//El precio de cada computadora es de $700.

$cantidad=7;
$total=$cantidad*700;
if($cantidad<5):
    $total=$total-($total*0.10);
elseif($cantidad>=5 && $cantidad<10):
    $total=$total-($total*0.20);
elseif($cantidad>=10):
    $total=$total-($total*0.40);
endif;
echo "El total a pagar es $ ". $total;






?>