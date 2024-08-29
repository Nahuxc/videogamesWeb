<?php require_once "./includes/redirect.php" ?>
<?php require_once "./includes/navbar.php" ?>

<section class="createCategory">
            <?php require_once "./includes/sectGames/controllerSidebar.php"?>
            <div id="box-login" class="box-login">
                <!-- formulario de creacion de categorias -->
                <div class="form-login-init">
                    <h2>Crear Categoria</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>Como usuario de la web puedes crear tu propia categoria</p>
                </div>
                <hr>

                <!-- formulario  -->
                <form action="save-category.php" method="POST" class="form-login">
                    <label>Nombre de la categoria:</label>
                    <input name="name" type="text">
                    <input class="btn-submit" name="createSubmit" value="Crear categoria" type="submit">
                </form>
            </div>
</section>

<?php require_once "./includes/footer.php" ?>