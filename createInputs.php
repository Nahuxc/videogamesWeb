<?php require_once "./db/connection.php" ?>
<?php require_once "./includes/redirect.php" ?>
<?php require_once "./includes/navbar.php" ?>
<?php require_once "./helpers/helpers.php" ?>

<section class="createInputs">
            <?php require_once "./includes/sectGames/controllerSidebar.php"?>
            <div class="box-login">
                <!-- formulario de creacion de Inputs / con los estilos del formulario de login -->
                <div class="form-login-init">
                    <h2>Crear Posteos</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>Como usuario de la web puedes crear Tus posteos para que otros usuarios lo vean</p>
                </div>
                <hr>
                <!-- formulario  -->
                <form action="./actions/create-inputs.php" method="POST" class="form-login">
                    <label>Titulo:</label>
                    <input name="title" type="text">
                    <?php echo isset($_SESSION["errors_inputs"]) ? showError($_SESSION["errors_inputs"], "title") : ""; ?>

                    <label>Descripcion:</label>
                    <textarea class="input-description" cols="60" rows="8" name="description" ></textarea>
                    <?php echo isset($_SESSION["errors_inputs"]) ? showError($_SESSION["errors_inputs"], "description") : ""; ?>

                    <label>Tipo de categoria:</label>
                    <!-- obtener las categorias con su nombre y id -->
                    <?php if(isset($category)) :?>
                    <select class="input-category" name="category">
                        <?php $category = getCategory($con); ?>
                        <?php foreach($category as $values) : ?>
                            <option value="<?= $values["id"] ?>"><?= $values["name"] ?>  </option>
                        <?php endforeach;?>
                    </select>
                    <?php else: ?>
                        <p class="alert" >No hay Categorias creadas, Crea alguna para poder crear el posteo</p>
                    <?php endif;?>
                    <?php echo isset($_SESSION["errors_inputs"]) ? showError($_SESSION["errors_inputs"], "category") : ""; ?>
                    <input class="btn-submit" value="Crear Posteo" type="submit">
                </form>
            </div>
</section>

<?php require_once "./includes/footer.php" ?>