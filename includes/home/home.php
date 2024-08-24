<?php require_once "helpers/helpers.php" ?>
<!-- section home -->
<?php echo isset($_SESSION["errors"]) ?  alertErrorSpam() : ""; ?>
<section id="home" class="home">
            <h1 class="border">VIDEO GAMES WEB</h1>
            <h2 class="home-title wave">VIDEO GAMES WEB</h2>
            <span>Public your comments or Games</span>
            <button id="home-btn" class="home-btn">Start Now</button>
</section>