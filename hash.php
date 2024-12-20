<?php
$clave="HolaMundo123";

echo md5($clave). "<br>";
echo sha1($clave). "<br>";
echo hash("md5",$clave ). "<br>";

foreach(hash_algos() as $algoritmos){
    echo $algoritmos. "<br>";

}

echo password_hash($clave, PASSWORD_DEFAULT). "<br>";
echo password_hash($clave, PASSWORD_BCRYPT). "<br>" ;
?>
