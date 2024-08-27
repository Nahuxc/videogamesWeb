

<!-- sidebar de botones -->
<?php require_once "controllerSidebar.php"?>

<!-- seccion de posteos -->
<section class="section-games">
            <div class="box-post-games">

                <!-- titulo del contenedor -->
                <h3 class="box-post-games-title">Ultimos Posteos</h3>
                <?php if(isset($_SESSION["user"])) :?>
                <h2 class="title-user" >Bienvenido, <?= $_SESSION["user"]["name"] ?> </h2>
                <?php endif;?>
                <!-- cards -->
                <div class="card-games">
                    <div class="card-games-post">
                        <h2>God of War</h2>
                        <p>decripcion</p>
                        <p>date:23-24-02</p>
                    </div>
                    <div class="card-games-user">
                        <i class="fa-solid fa-user"></i>
                        <p>Martin</p>
                    </div>
                </div>
                <!-- cards -->
                <div class="card-games">
                    <div class="card-games-post">
                        <h2>Fifa 24</h2>
                        <p>decripcion</p>
                        <p>date:23-24-02</p>
                    </div>
                    <div class="card-games-user">
                        <i class="fa-solid fa-user"></i>
                        <p>Franco</p>
                    </div>
                </div>
                <!-- cards -->
                <div class="card-games">
                    <div class="card-games-post">
                        <h2>GTA V</h2>
                        <p>decripcion</p>
                        <p>date:23-24-02</p>
                    </div>
                    <div class="card-games-user">
                        <i class="fa-solid fa-user"></i>
                        <p>Juan carlos</p>
                    </div>
                </div>
            </div>
            <?php require_once "boxgames.php"?>
        </section>