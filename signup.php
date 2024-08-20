<?php

session_start();

if(isset($_POST)){
    /* obtener datos del formulario */
    $name = isset($_POST["name"]) ? $_POST["name"] : false;

    $surname = isset($_POST["surname"]) ? $_POST["surname"] : false;

    $email = isset($_POST["email"]) ? $_POST["email"] : false;

    $password = isset($_POST["password"]) ? $_POST["password"] : false;


    /* array de errores */
    $errors = array();

    /* verificacion de nombre */
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name) ){
        $name_validate = true;
    }else{
        $name_validate = false;
        $errors["name"] = "el nombre no es valido";
    }

    /* verificacion de surname */
    if(!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)){
        $surname_validate = true;
    }else{
        $surname_validate = false;
        $errors["surname"] = "el apellido no es valido";
    }

    /* verificar email */

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errors["email"] = "el email no es valido";
    }

    /* verificar contraseña */
    if(!empty($password)){
        $password_validate = true;
    }else{
        $errors["password"] = "la contraseña esta vacia";
    }




    $save_user = false;

    if(count($errors) == 0){
        /* insertar usuario en la db en la tabla que corresponda */
        $save_user = true;

    }else{
        $_SESSION["errors"] = $errors;
        header("Location:index.php");
    }


}


?>

