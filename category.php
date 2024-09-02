 <!-- navbar y header -->
 <?php require_once "includes/navbar.php"?>

<!-- sidebar de botones -->
<?php require_once "./includes/sectGames/controllerSidebar.php"?>
<?php require_once "./helpers/helpers.php" ?>
<?php 

$category_name = getCategoryName($con, $_GET["id"]);
if(!isset($category_name["id"])){
    header("Location:index.php");
}

?>


<!-- seccion de posteos -->
<section class="section-games">
            <div class="box-post-games">
            
                <!-- titulo del contenedor -->
                <h3 class="box-post-games-title">Posteos de la categoria: <span> <?=$category_name["name"] ?> </span> </h3>
                <?php if(isset($_SESSION["user"])) :?>
                <h2 class="title-user" >Bienvenido, <?= $_SESSION["user"]["name"] ?> </h2>
                <?php endif;?>
                <!-- cards -->
                 <?php $inputs = getInputs($con, null, $_GET["id"]);?>
                <?php if(!empty($inputs) && mysqli_num_rows($inputs) >= 1):?>
               
                        <?php foreach($inputs as $input) :?>
                                <div class="card-games">
                                    <div class="card-games-post">
                                        <h2><?= $input["title"]; ?></h2>
                                        <span><?= "Categoria - ".$input["category"] ?></span>
                                        <p><?= substr($input["description"], 0, 120)." . . ." ?></p>
                                        <span><?= "Publicado - ".$input["date"]; ?></span>
                                        <a href="#">Ver Mas Contenido</a>
                                    </div>
                                    <div class="card-games-user">
                                        <i class="fa-solid fa-user"></i>
                                        <p><?= $input["username"]; ?> </p>
                                    </div>
                                </div>
                        <?php endforeach;?>
                <?php else: ?>
                    <h2 class="alert">No hay Posteos en esta categoria  </h2>
                <?php endif;?>

            </div>
            <?php require_once "./includes/sectGames/boxgames.php"?>
        </section>


         <!-- footer -->
    <?php require_once "includes/footer.php"?>