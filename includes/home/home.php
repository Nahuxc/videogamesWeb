<?php require_once "helpers/helpers.php" ?>
<!-- section home -->
<?php echo isset($_SESSION["errors"]) ?  alertErrorSpam() : ""; ?>
<?php echo isset($_SESSION["error_login"]) ? "<div class='alert alert-spam' >".$_SESSION["error_login"]."</div>" : null; ?>
<section id="home" class="home">
            <h1 class="border">VIDEO GAMES WEB</h1>
            <h2 class="home-title wave">VIDEO GAMES WEB</h2>
            <span>Publica tus posteos de opiniones sobre juegos</span>
            <button id="home-btn" class="home-btn">Comenzar</button>
</section>