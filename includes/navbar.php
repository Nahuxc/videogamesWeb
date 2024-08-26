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
                <li>
                    <i class="fa-solid fa-house"></i><a href="./index.php"> Home</a>
                </li>
                <li><i class="fa-solid fa-inbox"></i> category</li>
                <li><i class="fa-solid fa-users"></i> about us</li>
                <li><i class="fa-solid fa-paper-plane"></i> contact</li>
                <?php if(isset($_SESSION["user"])) : ?>
                <li id="user_log" class="login-active"><i class="fa-solid fa-user"></i> <?= $_SESSION["user"]["name"]; ?> </li>
                <?php endif;?>
            </ul>
        </nav>
    </header>