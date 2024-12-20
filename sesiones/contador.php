<?php
session_name("LOGIN");
//session_id("php");
session_start();//Creamos la session

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Hola  ". $_SESSION["Nombre"]. " "; ?>
   
    <a href="cerrar.php">Eliminar sesion</a>
    
</body>
</html>