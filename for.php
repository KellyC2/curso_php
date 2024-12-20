<?php
/**
 * La estructura repetitiva for (para) se utiliza generalmente cuando tenemos bien determinada la cantidad de repeticiones a realizar.
 * Se diferencia de las anteriores en que se debe incluir en la propia instrucción una variable de control, la cual se incrementa o decrementa de forma automática. 
 * 
 */
//Ejemplo1:Diseñe un programa que imprima los nújmeros del 1 hasta el 20 (incremento y decremento).
for($i=1;$i<=20;$i++){
    echo $i. "<br>";

}

for ($i = 20; $i >=1; $i--) {
    echo $i . "<br>";
}



//Ejemplo2:Diseñe un progra,a que imprima la table de multiplicar de un numero dado, desde el factor 1 hasta el 12(incremento y decremento).
$numero=2;
for ($i = 1; $i <= 12; $i++) {
    echo $numero . " X " .  $i . " = " . $numero *$i. "<br>";
}
    
for ($i = 12; $i >= 1; $i--) {
    echo $numero . " X " . $i . " = " . $numero * $i . "<br>";
}


?>