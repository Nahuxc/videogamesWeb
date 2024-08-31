<?php require_once "./db/connection.php" ?>
<?php require_once "./includes/redirect.php" ?>
<?php require_once "./includes/navbar.php" ?>
<?php require_once "./helpers/helpers.php" ?>


<section class="userData">
            <?php require_once "./includes/sectGames/controllerSidebar.php"?>
            <div class="box-user">
                <!-- formulario de Editar datos del usuario / con los estilos del formulario de login -->
                <div class="form-user-init">
                    <div class="form-user-init-content">
                        <h2><?= $_SESSION["user"]["name"] ?></h2>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="form-user-init-content-2" >
                        <h3>Datos del usuario:</h3>
                        <p>Nombre : <?= $_SESSION["user"]["name"] ?> </p>
                        <p>Apellido : <?= $_SESSION["user"]["surname"] ?> </p>
                        <p>Email : <?= $_SESSION["user"]["email"] ?></p>
                        <span>Fecha de creacion de usuario <?= $_SESSION["user"]["date"] ?></span>
                    </div>
                </div>
                <hr>
                <!-- formulario  -->
                <form action="./actions/updateDataUser.php" method="POST" class="form-user">
                <?php echo isset($_SESSION["update"]) ? $_SESSION["update"] : ""; ?>

                    <label>Nombre:</label>
                    <input value="<?= $_SESSION["user"]["name"] ?>" name="name" type="text">

                    <label>Apellido:</label>
                    <input value="<?= $_SESSION["user"]["surname"] ?>" name="surname" type="text">

                    <label>Email:</label>
                    <input value="<?= $_SESSION["user"]["email"] ?>" name="email" type="email">

                    <input class="btn-submit" value="Actualizar datos" type="submit">
                </form>
                <?php deleteErrors(); ?>
            </div>
</section>






<?php require_once "./includes/footer.php" ?>