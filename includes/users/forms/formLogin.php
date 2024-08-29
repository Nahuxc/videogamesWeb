 <!-- form login -->
 <div id="box-login" class="box-login">

                <!-- inicio del formulario -->
                <div class="form-login-init">
                    <h2>Iniciar Sesion</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>sino tienes una cuenta <button id="changeSignup" class="btn-change">click Aqui</button></p>
                </div>
                <hr>

                <!-- formulario  -->
                <form action="includes/login.php" method="POST" class="form-login">
                    <label>email:</label>
                    <input placeholder="Email" name="email" type="email">
                    <label>Contraseña: </label>
                    <input placeholder="Contraseña" name="password" type="password">
                    <input class="btn-submit" name="loginSubmit" value="Iniciar sesion" type="submit">
                </form>
            </div>