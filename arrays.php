<?php 
/** ARRAYS EN PHP
 * Una array en PHP es un tipo especial de datos que representa los llamados mapas ordenados de datos. Un mapa es un tipo de datos que asocia valores con claves, también llamado "array asociativo".
 * Los valores almacenados en un array no tienen porqué ser del mismo tipo como ocurre en otros lenguajes de programación.
 * La posibilidad de utilizar como valores de un array otros array, árboles, ñes permite la definición de arrays multidimensionales.
 * 
 * PHP soporta tanto arrays escalares (indice numérico), arrays asociativos (índice por clave) y arrays multidimensionales.
 * Para acceder a los elementos de un array se utilizan los corchetes [], dentro de los cuales se indicará un índice o clave de localización. 
 * 
 * A diferencia de otros lenguajes de PHP no hcae falta definir el array antes de utilizarlo. Cuando se definen elementos de un array, PHP reconoce automáticamente que se trata de un array sin necesidad de declaración previa.
 * 
 * TIPOS DE ARRAYS:
 * ESCALARES: Los arrays escalares son aquellos en los que para acceder a los elementos utilizamos un índice qeu representa la posición del valor dentro del array comenzando desde el índice 0.
 * ASOCIATIVOS: Para acceder a los elementos del array utilizamos la clave asociada con el elemento, donde este toma un cierto número de parejas utilizando la sintaxis clave =>valor como argumentos. 
 * MULTIDIMENSIONALES:Es aquel cuyos valores son otros arrays. Para acceder a sus elementos se tienen que indicar los índices de cada una de sus dimensiones, utilizando tantos pares de corchetes como dimensiones se definan en el array: [][] ->2 dimensiones, [][][]->3 dimensiones, etc.
 * 
 * 
 * DEFINIR UN ARRAY: 
 * En PHP podemos definir arrays utilizando el constructor del lenguaje array() o utilizando la notación de corchetes [] (a partir de PHP 5.4) también llamada sintaxis corta. 
 * Si a la hora de definir el array no se indincan los valores, estaremos creando un array vacío.
 * 
 * 
 */
//Array de tipo escalares
$students=array("Carlos", "Jose", "Vanessa", "Katy");
$students[3]="Claudia";

$teachers =["Wendy", "Lorenzo", "Luis"];

echo $students[3];
echo $teachers[2];


//Array de tipo asociativo
$tutor=[
    "nombre"=>"Mario",
    "apellido"=>"Alfaro",
    "edad"=>27
];
$tutor["edad"]=19;
echo $tutor["edad"];


//Array multidimmensionales
$tutor2=[
    "nombre"=>"Vanessa",
    "apellido"=>"Carlos",
    "edad"=>20,
    "cursos"=>["PHP", "Python", "CSS"]
];
echo $tutor2["cursos"][1];





?>