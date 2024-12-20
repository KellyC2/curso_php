<?php

/**
 * Las cookies son un mecanismo por el que se almacenan datos en el navegador para monitorizar i identificar a los usuarios que vuelvan al sitio web.
 * En otras palabras podemos decir que las cookies son pequeños archivos donde almacenamos datos, estos archivos se almacenan en el navegador del cliente.
 * Las cookies se deben de crear antes del Doctype, ya que han de ser generadas antes de que el navegador procese código HTML.
 * Ejemplo de cookies: preferencias de idioma, segumiento de anuncios, etc.
 * 
 */
//setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly);
setcookie("Idioma", "es", time()+60*60*24*365, "/", "localhost", false, false ) ;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $_COOKIE ["Idioma"];  ?></h1>
</body>

</html>