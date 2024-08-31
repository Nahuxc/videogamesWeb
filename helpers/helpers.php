
<?php include('db/connection.php');?>
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



/* funcion filtrador de categoria por nombre ingresado desde el formulario */
function filterValueArrCategory($con, $valueForm){

    $sql = "SELECT * FROM category;";
    $category = mysqli_query($con, $sql);

    foreach($category as $value){
        if($value["name"] == $valueForm ){
            $valueFilter = $value["name"];
            return $valueFilter;
        }
    }
}



/* obtener inputs */

function getInputs($con){
    $sql = "SELECT i.*, c.name as 'category', u.name as 'username' FROM inputs i INNER JOIN category c ON i.category_id = c.id INNER JOIN users u ON i.user_id = u.id ORDER BY date DESC";

    $inputs = mysqli_query($con, $sql);

    $result = array();

    if($inputs && mysqli_num_rows($inputs) >= 1){
        $result = $inputs;
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

    if(isset($_SESSION["update"])){
        $_SESSION["update"] = null;
        session_unset();
    }

    if(isset($_SESSION["errors_category"])){
        $_SESSION["errors_category"] = null;
        session_unset();
    }

    if(isset($_SESSION["errors_inputs"])){
        $_SESSION["errors_inputs"] = null;
        session_unset();
    }

    if(isset($_SESSION["errors"])){
        $_SESSION["errors"] = null;
        session_unset();
    }

    if(isset($_SESSION["complete"])){
        $_SESSION["complete"] = null;
        session_unset();
    }

}



?>