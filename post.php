 <!-- navbar y header -->
 <?php require_once "includes/navbar.php"?>

  <!-- redirect -->
  <?php require_once "./includes/redirect.php" ?>

<!-- sidebar de botones -->
<?php require_once "includes/sectGames/controllerSidebar.php"?>
<?php require_once "helpers/helpers.php" ?>


<?php 

$input_id = getInputId($con, $_GET["id"]);
if(!isset($input_id["id"])){
    header("Location:index.php");
}

?>


<section class="box-view-post"  >
        <div  class="view-content">
              <h2 class="title"><?= $input_id["title"] ?></h2>
              <div class="box-description">
                  <h3>Contenido del Posteo:</h3>
                  <span>Categoria: <?= $input_id["category"] ?></span>
                  <p><?= $input_id["description"] ?></p>
                  <span>Publicado - <?= $input_id["date"] ?> </span>
                  <div class="view-btnBack">
                    <a href="index.php">Volver Al Inicio</a>
                  </div>
              </div>
        </div>
</section>






<!-- footer -->
<?php require_once "includes/footer.php"?>