    <!-- navbar y header -->
    <?php require_once "includes/navbar.php"?>

    <main>

        <?php if(isset($_SESSION["user"]) || isset($_SESSION["complete"])) :?>

            <!-- section de videojuegos y controles para el usuario -->
            <?php  require_once "includes/sectGames/sectionGames.php" ?>

            <?php else :?>

                <!-- home -->
                <?php require_once "includes/home/home.php"?>

                <!-- section de formularios -->
                <?php require_once "includes/users/sectionForms.php"?>

        <?php endif;?>


    </main>

    <!-- footer -->
    <?php require_once "includes/footer.php"?>

