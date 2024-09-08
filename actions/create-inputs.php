<?php require_once "../db/connection.php" ?>

<?php

if(isset($_POST)){

    /* obtener datos */
    $title = isset($_POST["title"]) ? mysqli_real_escape_string($con, $_POST["title"]) : false;
    $description = isset($_POST["description"]) ? mysqli_real_escape_string($con, $_POST["description"]) : false;
    $category_id = isset($_POST["category"]) ? (int)$_POST["category"] : false;
    $user_id = (int)$_SESSION["user"]["id"];

    $errors = array();


    /* validacion */

    if(empty($title) && $title == "" ){
        $errors["title"] = "el titulo no es valido";
    }

    if(empty($description) && $description == ""){
        $errors["description"] = "la descripcion no es valida";
    }
    if(empty($category_id) && !is_numeric($category_id) ){
        $errors["category"] = "la categoria no es valida";
    }

    if(count($errors) == 0){

        if(isset($_GET["edit"])){

            $input_id = $_GET["edit"];


            $sql = "UPDATE inputs SET title='$title', description='$description', category_id='$category_id' WHERE id= $input_id AND user_id= $user_id ";
        }else{
            /* insertar en la base de datos */
            $sql = "INSERT INTO inputs VALUES( 'NULL', $user_id, $category_id, '$title', '$description', CURDATE());";
        }
        $query = mysqli_query($con, $sql);

        header("location:../index.php");
    }else {
        $_SESSION["errors_inputs"] = $errors;

        if($_GET["edit"]){
            header("location:../edit-post.php?id".$_GET["edit"]);
        }else{
            header("location:../createInputs.php");
        }

    }


}




?>