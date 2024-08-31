<?php require_once "../db/connection.php"; ?>

<?php

if(isset($_POST)){

    $name = isset($_POST["name"]) ? mysqli_real_escape_string($con, $_POST["name"]) : false;

    $surname = isset($_POST["surname"]) ? mysqli_real_escape_string($con, $_POST["surname"]) : false;

    $email = isset($_POST["email"]) ? mysqli_real_escape_string($con, $_POST["email"]) : false;

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

     if(count($errors) == 0){


        $user = $_SESSION["user"];


            $sql = "UPDATE users SET".
                   " name = '$name', ".
                   " surname = '$surname', ".
                   " email = '$email' ".
                   "WHERE id = ".$user["id"];
            $saveUser = mysqli_query($con, $sql);
       


        /* verificacion de que existen los datos y se registraron correctamente */
        if($saveUser){
            $_SESSION["user"]["name"] = $name;
            $_SESSION["user"]["surname"] = $surname;
            $_SESSION["user"]["email"] = $email;

            $_SESSION["update"] = "<div class='alert-green' >"."se realizaron los cambios con exito"."</div>";

            header("Location:../userData.php");

        }else{
            $_SESSION["errors"] = "fallo al guardar el usuario";
        }





    }else{
        $_SESSION["errors"] = $errors;
        header("Location:../userData.php");
    }



}



?>