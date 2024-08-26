<?php
/* iniciar sesion y conectar la db */

require_once "../db/connection.php";

if(isset($_POST["loginSubmit"])){


    /* obtener datos del formulario */
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    /* comprobar datos del usuario */

    /* buscamos dentro de la tabla de usuarios el usuario que coincida con el email */
    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $login = mysqli_query($con, $sql); /* realizamos la consulta */

    if($login && mysqli_num_rows($login) == 1){

        /* fetcheamos el usuario para que podamos ver sus datos */
        $user = mysqli_fetch_assoc($login);

        $verifyUser = password_verify($password, $user["password"]); /* comparamos con la contraseña ingresada para ver si coincide con la del usuario */

        if($verifyUser){
            $_SESSION["user"] = $user;

            if(isset($_SESSION["error_login"]) ){
                session_unset($_SESSION["error_login"]);
            }

            

        }else{
            $_SESSION["error_login"] = "login incorrecto";
        }

    }else{
        $_SESSION["error_login"] = "login incorrecto";
    }

    

    /* utilizar una sesion para guardar los datos del usuario logeado */

    /* si algo falla enviar una sesion con el fallo */

   


}

 /* redirigir al index */
 header("location:../index.php");

 


?>