<?php

/* datos para inicializar la base de datos */
$server = "localhost";
$username = "root";
$password = "";
$database = "blog_videojuegos";

/* conexion */
$con = mysqli_connect($server, $username, $password, $database);


/* inicializacion, hacemos que sea todo utf8 para que permita todos los caracteres */
mysqli_query($con, "SET NAMES 'utf8' ");

/* iniciar la sesion */
session_start();


?>