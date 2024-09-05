<!-- conexion a la db -->
<?php require_once "db/connection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Jersey+10&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=New+Amsterdam&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- title web -->
    <title>VIDEO GAMES WEB</title>
</head>
<body>
<?php require_once "helpers/helpers.php"?>
<header class="header">
        <nav class="nav">
            <!-- logo -->
            <div class="nav-logo">
                <img src="./assets/img/logo.png" alt="">
            </div>
            <!-- buscador -->
             <div class="box-search" >
                 <i class="fa-solid fa-magnifying-glass"></i><input class="search" type="search">
             </div>
            <!-- navegacion --> 
            <ul class="nav-list">
                <li class="nav-list-navigation"><i class="fa-solid fa-house"></i><a href="./index.php"> Inicio</a></li>
                <button id="btn-subCategory" class="nav-list-btn" ><i class="fa-solid fa-inbox"></i> Categorias</button>



                <?php if(isset($_SESSION["user"])) : ?>
                <!-- submenu categoria -->
                <div id="submenuCategory" class="nav-list_category">
                    <!-- categorias desde la base de datos -->
                    <?php $category = getCategory($con); /* llamamos la funcion y la almacenamos en una variables */?>
                    <?php if(!empty($category)) : ?>
                        <?php foreach ($category as $categoryAtr) : ?>
                                <a href="category.php?id=<?= $categoryAtr["id"] ?> "> <?= $categoryAtr["name"];?> </a>
                        <?php endforeach; ?>
                    <?php endif;?>
                </div>

                <!-- nombre de usuario -->
                <li id="user_log" class="nav-list-navigation login-active"><i class="fa-solid fa-user"></i> <?= $_SESSION["user"]["name"]; ?> </li>
                <?php endif;?>
            </ul>
        </nav>
    </header>