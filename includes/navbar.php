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
                <li class="nav-list-navigation"><i class="fa-solid fa-house"></i><a href="./index.php"> Home</a></li>
                <button id="btn-subCategory" class="nav-list-btn" ><i class="fa-solid fa-inbox"></i> Category</button>



                <?php if(isset($_SESSION["user"])) : ?>
                <!-- submenu categoria -->
                <div id="submenuCategory" class="nav-list_category">
                    <!-- categorias desde la base de datos -->
                    <?php $category = getCategory($con); /* llamamos la funcion y la almacenamos en una variables */?>
                    <?php if(!empty($category)) : ?>
                        <?php foreach ($category as $categoryAtr) : ?>
                                <a> <?= $categoryAtr["name"];?> </a>
                        <?php endforeach; ?>
                    <?php endif;?>
                </div>

                <!-- nombre de usuario -->
                <li id="user_log" class="nav-list-navigation login-active"><i class="fa-solid fa-user"></i> <?= $_SESSION["user"]["name"]; ?> </li>
                <?php endif;?>
            </ul>
        </nav>
    </header>