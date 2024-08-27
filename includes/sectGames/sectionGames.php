

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
                 <?php $inputs = getInputs($con);?>
                <?php if(!empty($inputs)):?>
               
                        <?php foreach($inputs as $input) :?>
                                <div class="card-games">
                                    <div class="card-games-post">
                                        <h2><?= $input["title"]; ?></h2>
                                        <span><?= "Categoria - ".$input["category"] ?></span>
                                        <p><?= $input["description"]; ?></p>
                                        <span><?= "Publicado - ".$input["date"]; ?></span>
                                    </div>
                                    <div class="card-games-user">
                                        <i class="fa-solid fa-user"></i>
                                        <p><?= $input["username"]; ?> </p>
                                    </div>
                                </div>
                        <?php endforeach;?>
                    
               
                <?php endif;?>

            </div>
            <?php require_once "boxgames.php"?>
        </section>