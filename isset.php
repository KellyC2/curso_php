<?php

//Un a variable es nula cuando la definimos en valor null, cuando creamos la variable pero no deginimos un valor, o cuando destruimos una variable con la funcion unset(). 
$name=23;
unset($name);
if(is_null($name)){
    echo "Es nula";
}else {
    echo "No es nula";
}

//Empty: caundo el valor es una cadena vacia " ", cuando tiene un "0" como valor, "0.0", null, false o un array vacio.
//Un a variable es nula cuando la definimos en valor null, cuando creamos la variable pero no deginimos un valor, o cuando destruimos una variable con la funcion unset(). 
$numero =$_GET["numero"];
if (empty($numero)) {
    echo "Esta vacia";
} else {
    echo "No esta vacia";
}

//isset(): Determina si una variable esta definida y no es null.
$numero = $_GET["numero"];
unset($numero);
if (isset($numero)) {
    echo "Esta definida";
} else {
    echo "No esta definida";
}


?>