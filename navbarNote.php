        
        
        <!-- NAVBAR -->
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
                <a href="userData.php" id="user_log" class="nav-list-navigation login-active"><i class="fa-solid fa-user"></i> <?= $_SESSION["user"]["name"]; ?> </a>
                <?php endif;?>
            </ul>
        </nav>









        <nav class="nav">
            <!-- logo -->
            <div class="nav-logo">
                <img src="./assets/img/logo.png" alt="">
            </div>
            <div class="box-search" >
                 <i class="fa-solid fa-magnifying-glass"></i><input class="search" type="search">
             </div>
            <button class="btn-sidebar">x</button>
            <div class="nav-submenu">
                <div class="nav-submenu-user">
                    <?php if(isset($_SESSION["user"])):?>
                        <!-- nombre de usuario -->
                        <a href="userData.php" id="user_log" class="nav-list-navigation login-active"><i class="fa-solid fa-user"></i> <?= $_SESSION["user"]["name"]; ?> </a>
                    <?php endif;?>
                </div>
                <ul class="nav-submenu-list">
                    <li><a href="index.php">Inicio</a></li>
                    <?php if(isset($_SESSION["user"])) : ?>
                    <!-- categorias desde la base de datos -->
                    <?php $category = getCategory($con); /* llamamos la funcion y la almacenamos en una variables */?>
                    <?php if(!empty($category)) : ?>
                        <?php foreach ($category as $categoryAtr) : ?>
                                <li><a href="category.php?id=<?= $categoryAtr["id"] ?> "> <?= $categoryAtr["name"];?> </a></li>
                        <?php endforeach; ?>
                    <?php endif;?>
                <?php endif;?>
                </ul>
            </div>
        </nav>