

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
                    <h2>God of War</h2>
                    <p>decripcion</p>
                    <p>date:23-24-02</p>
                </div>
                <!-- cards -->
                <div class="card-games">
                    <h2>God of War</h2>
                    <p>decripcion</p>
                    <p>date:23-24-02</p>
                </div>
                <!-- cards -->
                <div class="card-games">
                    <h2>God of War</h2>
                    <p>decripcion</p>
                    <p>date:23-24-02</p>
                    <p>categoria: accion</p>
                </div>
                <!-- cards -->
                <div class="card-games">
                    <h2>God of War</h2>
                    <p>decripcion</p>
                    <p>date:23-24-02</p>
                    <p>categoria: accion</p>
                </div>
                <!-- cards -->
                <div class="card-games">
                    <h2>God of War</h2>
                    <p>decripcion</p>
                    <p>date:23-24-02</p>
                    <p>categoria: accion</p>
                </div>

                <!-- btn ver mas -->
                <button>Ver todos los posteos</button>
            </div>
        </section>