<?php

/* REGLS PARA DEFINIR UNA CONSTANTES:
*El monbre de un constante sigue las mismas reglas que cualquier varible de PHP. Un nombre de constante válido epieza por una letra o guión bajo, seguido por cualquier número de letras, números o guiones bajos.
*Por defecto, una constante distingue mayúsculas y minpusculas. 
*Por convención, los identifocadores de constantes se declaran en maypuculas.
 */

//Sintaxis antigua

define("NOMBRE", "Kelly");

  echo NOMBRE;


define("ALUMNOS", array("Carlos", "Alba", "Jose"));
echo ALUMNOS[0];

//Nueva forma de declarar constantes:
const NAME ="KELLY CON NUEVA SINTAXIS";
echo NAME;