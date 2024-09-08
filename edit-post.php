 <!-- navbar y header -->
 <?php require_once "includes/navbar.php"?>

  <!-- redirect -->
  <?php require_once "./includes/redirect.php" ?>
  <?php require_once "helpers/helpers.php" ?>


<?php 

$input_id = getInputId($con, $_GET["id"]);
if(!isset($input_id["id"])){
    header("Location:index.php");
}

?>

<?php require_once "./includes/sectGames/controllerSidebar.php"?>
<section class="editPost">
            <div class="box-login">
                <!-- formulario de creacion de Inputs / con los estilos del formulario de login -->
                <div class="form-login-init">
                    <h2><?= $input_id["title"] ?></h2>
                    <p>Edita tu Posteo con este formulario</p>
                </div>
                <hr>
                <!-- formulario  -->
                <form action="./actions/create-inputs.php?edit=<?= $input_id["id"] ?> " method="POST" class="form-login">
                    <label>Titulo:</label>
                    <input value="<?= $input_id["title"] ?>" name="title" type="text">
                    <?php echo isset($_SESSION["errors_inputs"]) ? showError($_SESSION["errors_inputs"], "title") : ""; ?>

                    <label>Descripcion:</label>
                    <textarea class="input-description" cols="60" rows="8" name="description" ><?= $input_id["description"] ?></textarea>
                    <?php echo isset($_SESSION["errors_inputs"]) ? showError($_SESSION["errors_inputs"], "description") : ""; ?>

                    <label>Tipo de categoria:</label>
                    <!-- obtener las categorias con su nombre y id -->
                    <?php if(isset($category)) :?>
                    <select class="input-category" name="category">
                        <?php $category = getCategory($con); ?>
                        <?php foreach($category as $values) : ?>
                        <option value="<?= $values["id"] ?>" <?php echo ($values["id"] == $input_id["category_id"]) ? 'selected="selected"' : ""; ?>>
                            <?= $values["name"] ?>
                        </option>
                        <?php endforeach;?>
                    </select>
                    <?php else: ?>
                        <p class="alert" >No hay Categorias creadas, Crea alguna para poder crear el posteo</p>
                    <?php endif;?>
                    <?php echo isset($_SESSION["errors_inputs"]) ? showError($_SESSION["errors_inputs"], "category") : ""; ?>
                    <input class="btn-submit" value="Editar Posteo" type="submit">
                </form>
            </div>
</section>


<?php require_once "./includes/footer.php" ?>