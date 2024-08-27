
<?php require_once "./db/connection.php";?>
<?php



/* esta funcion sirve para controlar el error que viene del arreglo erros y indicamos dentro de ese array el valor a imprimir */
function showError($error, $value){
    $alert = "";
    if(isset($error[$value]) && !empty($value)){
        $alert = "<div class='alert alert-error' >".$error[$value]."</div>";
    }

    return $alert;
}


/* obtener categorias */

function getCategory($con){
    $sql = "SELECT * FROM category ORDER BY id ASC";
    $category = mysqli_query($con, $sql);

    $result = array();
    if($category && mysqli_num_rows($category) >= 1){
        $result = $category;
        return $result;
    }

    

}



function alertErrorSpam(){
    $alertSpam = "";
    if(isset($_SESSION["errors"])){
        $alertSpam = "<div class='alert alert-spam' >"."no se ha completado el formulario correctamente"."</div>";
    }
    
    return $alertSpam;

}


function deleteErrors(){



    if(isset($_SESSION["errors"])){
        $_SESSION["errors"] = null;
        session_unset();
    }

    if(isset($_SESSION["complete"])){
        $_SESSION["completado"] = null;
        session_unset();
    }

}



?>