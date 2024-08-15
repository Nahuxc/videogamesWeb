<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "blog_videojuegos";


$con = mysqli_connect($server, $username, $password, $database);


mysqli_query($con, "SET NAMES 'utf8' ");


?>