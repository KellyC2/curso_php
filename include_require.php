<?php

/**INCLUDE & REQUIRE
 * Ambas funciones sirven para añadir otros ficheros a nuestros scripts en PHP.
 * 
 * include: Inserta en nuestro script un código procedente de otro archivo, si no existe dicho archivo o si contiene algún tipo de error nos mostrará un "warning" por pantalla y el script seguirá ejecutándose. 
 * Tiene una variante: include_once
 * Sintaxis:  
 *          include("ruta_archivo.php");        include_once("ruta_archivo.php");
 *          include "ruta_archivo.php";         include_once "ruta_archivo.php";
 *          
 * 
 * require:Hace la misma operación que include, pero en caso de no existir el archivo o error en el mismo mostrará un "fatal error" y el script no se sigue ejecutando. 
 *  Tiene una variante: require_once
 * Sintaxis
 *          require("ruta_archivo.php");        require_once("ruta_archivo.php");
 *          require "ruta_archivo.php";         require_once "ruta_archivo.php";         
 * 
 * 
 */
include ("forx.php");
include "for.php";

require "ifx.php";
require "if.php";


?>