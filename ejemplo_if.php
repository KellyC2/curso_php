<?php
/**
 * 1. Realizar un programa en donde se pide la edad del usuario; si es mayor de edad debe aparecer un mensaje indicandolo.
 * 2. En un almacén se hace un 20% de descuento a los clientes cuya compra supere los $100 ¿Cual srrá la cantidad que pagara una person ór su compra?
 * 
 * 
 */

$edad=20;
if($edad>=18){
    echo "Eres mayor de edad";
}

$total=120;
if($total>100):
    $total=$total-($total*0.2);
endif;

echo "El total a pagar es de: $  ". $total;


?>
