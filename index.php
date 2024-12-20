<?php
/*

$_POST["nombre"];// $_POST es una superglobal en PHP que alamacena datos enviados a traves del método POST.

$nombre= $_POST["nombre"];//Recupera el valor asociado con la clave "nombre" de $_POST y lo asigna a la variable $nombre.
echo$nombre. "<br>";

$asignatura =$_POST["asignatura"];//Toma el valor asociado con la clave "asignatura" de $_POST y lo almacena en la variable $assignatura
echo $asignatura. "<br>";

$frutas =$_POST["frutas"];//Recupera el valor asociado con la clave "frutas" de $_POST y lo asigna a la variable $frutas
echo $frutas. "<br>";



$_GET["nombre"]; // $_GET accede al valor de la clave "nombre" dentro de la superglobal $_GET.
//El código procesa información que se pasa a través de la URL en un formato como el siguiente : http://tu-dominio.com/archivo.php?nombre=Juan&asignatura=Matematicas&frutas=Manzana
//La URL incluye parámetros GET:  Los parámetros son: nombre, asignatura y frutas. Los valores enviados son: "Juan", "Matemáticas", "Manzana". 
//PHP procesa los parámetros: La superglobal $_GET captura los valores que estan en la URL. Luego, estos valores se asignan a las variables $nombre, $asignatura, y $frutas.


$nombre = $_GET["nombre"]; //Recupera el valor asociado con la clave "nombre" de $_GET y lo asigna a la variable $nombre.
echo $nombre . "<br>";

$asignatura = $_GET["asignatura"]; //Toma el valor asociado con la clave "asignatura" de $_GET y lo almacena en la variable $assignatura
echo $asignatura . "<br>";

$frutas = $_GET["frutas"]; //Recupera el valor asociado con la clave "frutas" de $_GET y lo asigna a la variable $frutas
echo $frutas . "<br>";

*/

//----------------------------------SELECCIONES MULTIPLES------------------------------------------------------------------

//var_dump($_POST["asignatura"]);

//Podemos almacenar el valor en una variable o podemos usarlo directamente, vamos a usarlo directamente.
foreach ($_POST["asignatura"] as $asignatura ){
    echo $asignatura. "<br>";

}

//Podemos alamcenar en una variable: 
$materia= $_POST["asignatura"];
foreach($materia as $asignatura){
    echo $asignatura. "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$frutas=$_POST["frutas"];
foreach($frutas as $fruta){
    echo $fruta."<br>";
}

?>