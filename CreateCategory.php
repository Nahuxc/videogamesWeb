<?php require_once "./includes/redirect.php" ?>
<?php require_once "./includes/navbar.php" ?>

<section class="createCategory">
            <?php require_once "./includes/sectGames/controllerSidebar.php"?>
            <div class="box-login">
                <!-- formulario de creacion de categorias / con los estilos del formulario de login -->
                <div class="form-login-init">
                    <h2>Crear Categoria</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>Como usuario de la web puedes crear tu propia categoria</p>
                </div>
                <hr>
                <!-- formulario  -->
                <form action="./actions/save-category.php" method="POST" class="form-login">
                    <label>Nombre de la categoria:</label>
                    <input name="name" type="text">
                    <?php echo isset($_SESSION["errors_category"]) ? showError($_SESSION["errors_category"], "name") : ""; ?>
                    <input class="btn-submit" name="createSubmit" value="Crear categoria" type="submit">
                </form>
                <?php deleteErrors(); ?>
            </div>
</section>

<?php require_once "./includes/footer.php" ?>