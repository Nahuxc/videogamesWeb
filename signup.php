<?php

if(isset($_POST["submit"])){
    /* obtener datos del formulario */
    $name = isset($_POST["name"]) ? $_POST["name"] : false;

    $surname = isset($_POST["surname"]) ? $_POST["surname"] : false;

    $email = isset($_POST["email"]) ? $_POST["email"] : false;

    $password = isset($_POST["password"]) ? $_POST["password"] : false;

}


?>

