<?php
$texto="hola mundo php ";

echo strtolower($texto);

echo strtoupper($texto);

echo ucfirst($texto);

echo ucwords($texto);

echo"<br>";


//Contando caracteres:
$longitud= strlen($texto);
echo "Hola mundo tiene " . $longitud. " caracteres <br>";

$palabras=str_word_count($texto);
echo $texto. " tiene ". $palabras. " palabras <br>";


?>