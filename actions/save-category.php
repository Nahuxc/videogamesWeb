
<?php require_once "../db/connection.php" ?>
<?php require_once "../helpers/helpers.php" ?>
<?php



if($_POST["createSubmit"]){

    

    /* obtenemos el dato */
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($con, strtolower($_POST["name"])) : false;

    

    /* verificamos si existe o no la categoria al crear  (filtramos con el dato ingresado para ver si existe o no en la db) */

    $categoryFilter = filterValueArrCategory($con, $name);


    $errors = array();



    if(!empty($name)  && !is_numeric($name) && !preg_match("/[0-9]/", $name) && $categoryFilter != $name ){
        $name_validate = true;
        echo "creado";
    }else{
        echo "el nombre ingresado no es valido";
        $name_validate = true;
        $errors["name"] = "el nombre ingresado no es valido o ya existe";
    }


    if(count($errors) == 0){
        $sql = "INSERT INTO category VALUES(null, '$name' );";
        $saveQuery = mysqli_query($con, $sql);
        header("location:../index.php");
    }else{
        $_SESSION["errors_category"] = $errors;
        header("location:../createCategory.php");
    }


    


}





?>