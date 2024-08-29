
<?php require_once "../db/connection.php" ?>
<?php



if($_POST["createSubmit"]){

    


    $name = isset($_POST["name"]) ? mysqli_real_escape_string($con, $_POST["name"]) : false;


    $errors = array();

    if(!empty($name)  && !is_numeric($name) && !preg_match("/[0-9]/", $name) ){
        $name_validate = true;
    }else{
        $name_validate = true;
        $errors["name"] = "el nombre ingresado no es valido";
    }


    if(count($errors) == 0){
        $sql = "INSERT INTO category VALUES(null, '$name')";
        $saveQuery = mysqli_query($con, $sql);
    }   


    /* falta hacer comprobacion si ya existe el nombre de la categoria a crear */


}


header("location:../index.php");


?>