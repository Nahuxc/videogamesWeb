<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=New+Amsterdam&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- title web -->
    <title>VIDEO GAMES WEB</title>
</head>
<body>
    <!-- navbar -->
    <?php require_once "includes/navbar.php"?>

    <main>
        <!-- home -->
        <?php require_once "includes/home.php"?>

        <!-- section de formularios -->
        <?php require_once "includes/sectionForms.php"?>


        <!-- section de videojuegos y controles para el usuario -->
        <!-- <?php require_once "includes/sectionGames.php" ?> -->
    </main>

    <!-- footer -->
    <footer class='autor-copyright'>
        <?php require_once "includes/footer.php"?>
    </footer>
</body>
<script src="./assets/js/index.js"></script>
</html>

<!-- conexion a la db -->
<?php require_once "./db/connection.php" ?>