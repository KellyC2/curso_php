<?php
/**
 * La sentencia switch es similar a una serie de sentencias IF en la misma expresion. 
 * En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresion) con muchos valores diferentes, 
 * y ejecutar una parte de código distinta dependiendo de a que valor es igual. 
 * Para esto es exactamente la expresión switch.
 * 
 * La comparación es una comprobación de igualdad debil.
 */
$fruta="Fresa";
switch($fruta){
    case "Fresa":
        echo "Eres una fresa";
        break;
    case "Pera":
        echo "Eres una pera";
        break;
    default:
        echo "No eres ni fresa ni pera";
}

$dia=1;
switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    case 6:
        echo "SÁBADO";
        break;
    case 7:
        echo "DOMINGO";
        break;
    default:
        echo "INTRODUCE UN VALOR VÁLIDO";
}



?>