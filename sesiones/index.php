<?php
session_name("LOGIN");
//session_id("php");
session_start(); //Creamos la session




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="login.php" method="POST">
        <label for="">USUARIO</label>
        <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
        <br>
        <label for="">CLAVE</label>
        <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4,30}" maxlength="30">
        <br>
        <br>
        <button type="submit">Login</button>


    </form>
</body>

</html>