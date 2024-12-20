<?php
/**
 * El ciclo foreach proporciona un modod sencillo de iterar sobre arrays.
 * foreach funciona sólo sobre arrays y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicualizada. Existen dos sintaxis.
 * foreach($array as $valor){
 *      $valor que tendra en cada iteracion un valor del array
 * } 
 * 
 * 
 * foreach ($array as $clave =>){
 *      $clave que tendra en cada iteracion una clave del array
 *      $valor que tendra en cada iteracion un valor del array
 * }
 * 
 */

$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];
foreach($laptop as  $valor){
    echo $valor. "<br>";
}
foreach($laptop as $clave=>$valor){
    echo $clave. " - ". $valor . "<br>";
}


$frutas = [
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9

];
foreach($frutas as $valor){
    echo $valor. "<br>";
}

foreach ($frutas as $clave=>$valor) {
    echo "Hay ". $valor . " ". $clave. " en el inventario". "<br>";
}

$productos=[
    ["codigo"=>"A0001", "description"=>"Mouse"],
    ["codigo"=>"A0002", "description"=>"Teclado"],
    ["codigo"=>"A0003", "description"=>"Monitor"],
    ["codigo"=>"A0004", "description"=>"Impresor"]

];
foreach($productos as $product){
    echo $product["codigo"]. " - ". $product["description"]. "<br>";

}


?>