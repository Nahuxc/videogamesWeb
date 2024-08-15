<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=New+Amsterdam&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>VIDEO GAMES PUBLICATION</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-logo">
                <img src="./assets/img/logo.png" alt="">
            </div>
            <input class="search" type="search">
            <ul class="nav-list">
                <li>
                    <a href="./index.php">Home</a>
                </li>
                <li>category</li>
                <li>about us</li>
                <li>contact</li>
                <li>Jorgito1234</li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- section home -->
        <section id="home" class="home">
            <h1 class="border">VIDEO GAMES PUBLICATION</h1>
            <h2 class="home-title wave">VIDEO GAMES PUBLICATION</h2>
            <span>Public your comments or Games</span>
            <button id="home-btn" class="home-btn">Start Now</button>
        </section>
        <!-- section forms -->
        <section id="home-forms" class="home-forms">
            <!-- form sign up -->
            <div id="box-signup" class="box-signup">
                <div class="form-signup-init">
                    <h2>Sign up</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>if you have account <button id="changeLogin" class="btn-change">click here</button></p>
                </div>
                <hr>
                <form class="form-signup" >
                    <label>Name:</label>
                    <input placeholder="Name" type="text">
                    <label>Surname:</label>
                    <input placeholder="Surname" type="text">
                    <label>Username:</label>
                    <input placeholder="Username" type="text">
                    <label>Email:</label>
                    <input placeholder="Email" type="email">
                    <label>Password: </label>
                    <input placeholder="Password" type="password">
                    <input class="btn-submit" value="Sign Up" type="submit">
                </form>
            </div>
            <!-- form login -->
            <div id="box-login" class="box-login">
                <div class="form-login-init">
                    <h2>Login</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>if you havent account <button id="changeSignup" class="btn-change">click here</button></p>
                </div>
                <hr>
                <form class="form-login">
                    <label>Username:</label>
                    <input placeholder="Name" type="text">
                    <label>Password: </label>
                    <input placeholder="Password" type="password">
                    <input class="btn-submit" value="Login" type="submit">
                </form>
            </div>
        </section>
    </main>
    <footer class='autor-copyright'>
            <div class='bar'></div>
            <p>&copy;<b> Video Juegos Web / Nahuel Alexander Coronel</b></p>
    </footer>
</body>
<script src="./assets/js/index.js"></script>
</html>