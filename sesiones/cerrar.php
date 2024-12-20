<?php
session_name("LOGIN");
//session_id("php");
session_start(); //Creamos la session

session_destroy();

//redireccionar con js y php puro
if (headers_sent()) {
    echo "<script>window.location.href='index.php';</script>";
} else {
    header("Location: index.php ");
}
?>