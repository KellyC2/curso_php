<?php
/** ESTRUCTURA CONDICIONAL SIMPLE(IF)
 * Permite la ejecución de fragmentos de código, la exoresión es evaluada a su valor booleano. Si la expresion se evalúa como TRU, PHP ejecutará la sentencia y si se evalúa como FALSE la ignorará. 
 * 
 * 
 * 
 */
if(1>=8){
    echo "Expresion verdadera";
}

if(9>8):
    echo "Expresión verdadera con estructura simple";
endif;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(9>8): ?>
    <h1>Expresion verdadera incrustada en html</h1>
    <?php endif; ?>
    
</body>
</html>