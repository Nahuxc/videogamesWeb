<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEO GAMES PUBLICATION</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-logo">
                <img src="./img/logo.png" alt="">
            </div>
            <input class="search" type="search">
            <ul class="nav-list">
                <li>home</li>
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
                    <img src="./img/logo.png" alt="">
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
                    <img src="./img/logo.png" alt="">
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
    <footer>

    </footer>
</body>
</html>