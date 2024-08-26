 <!-- form login -->
 <div id="box-login" class="box-login">

                <!-- inicio del formulario -->
                <div class="form-login-init">
                    <h2>Login</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>if you havent account <button id="changeSignup" class="btn-change">click here</button></p>
                </div>
                <hr>

                <!-- formulario  -->
                <form action="includes/login.php" method="POST" class="form-login">
                    <label>email:</label>
                    <input placeholder="Email" name="email" type="email">
                    <label>Password: </label>
                    <input placeholder="Password" name="password" type="password">
                    <input class="btn-submit" name="loginSubmit" value="Login" type="submit">
                </form>
            </div>