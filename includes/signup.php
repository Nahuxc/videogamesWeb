<?php

/* conexion a la db */
require_once "../db/connection.php";

/* iniciamos la sesion */

if(!isset($_SESSION)){
    session_start();
}


if(isset($_POST)){


    /* obtener datos del formulario y verificar con la funcion de mysql los string */

    $name = isset($_POST["name"]) ? mysqli_real_escape_string($con, $_POST["name"]) : false;

    $surname = isset($_POST["surname"]) ? mysqli_real_escape_string($con, $_POST["surname"]) : false;

    $email = isset($_POST["email"]) ? mysqli_real_escape_string($con, $_POST["email"]) : false;

    $password = isset($_POST["password"]) ? mysqli_real_escape_string($con, $_POST["password"]) : false;


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

        $save_user = true;

        /* cifrar la contraseña */
        $password_segurity = password_hash($password, PASSWORD_BCRYPT, ["cost"=>4]);



        /* insertar usuario en la db en la tabla que corresponda */
        $sql =  "INSERT INTO users VALUES(null, '$name','$surname', '$email', '$password_segurity', curdate()); ";


        /* pasar los valores de la conexion y la consulta */
        $querySave = mysqli_query($con, $sql );


        /* verificacion de que existen los datos y se registraron correctamente */
        if($querySave){
            $_SESSION["complete"] = "el registro se ha completado con exito";
            $sql = "SELECT * FROM users WHERE name = '$name' ";
            $register = mysqli_query($con, $sql);

            $user = mysqli_fetch_assoc($register);

            $_SESSION["user"] = $user;

        }else{
            $_SESSION["errors"]["general"] = "fallo al guardar el usuario";
        }





    }else{
        $_SESSION["errors"] = $errors;
        header("Location:../index.php");
    }

    
    header("Location:../index.php");

}



?>

