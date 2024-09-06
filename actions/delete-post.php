<?php

require_once "../db/connection.php";

if(isset($_SESSION["user"]) && isset($_GET["id"])){

    $input_id = $_GET["id"];
    $user_id = $_SESSION["user"]["id"];

    $sql = "DELETE FROM inputs WHERE user_id = '$user_id' AND id = $input_id ";

    mysqli_query($con, $sql);

}

header("Location:../index.php");


?>