

<!-- form sign up -->
        <div id="box-signup" class="box-signup">

                <!-- inicio del formulario -->
                <div class="form-signup-init">
                    <h2>Registrarse</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>Si ya tienes una cuenta <button id="changeLogin" class="btn-change">click Aqui</button></p>
                </div>
                <hr>

                <!-- formulario -->
                <form action="includes/signup.php" method="POST" class="form-signup" >
                    <label>Nombre:</label>
                    <input placeholder="Nombre" name="name" type="text">
                    <?php echo isset($_SESSION["errors"]) ?  showError($_SESSION["errors"], "name") : ""; ?>

                    <label>Apellido:</label>
                    <input placeholder="Apellido" name="surname" type="text">
                    <?php echo isset($_SESSION["errors"]) ? showError($_SESSION["errors"], "surname") : ""; ?>

                    <label>Email:</label>
                    <input placeholder="Email" name="email" type="email">
                    <?php echo isset($_SESSION["errors"]) ? showError($_SESSION["errors"], "email") : ""; ?>

                    <label>Contraseña: </label>
                    <input placeholder="Contraseña" name="password" type="password">
                    <?php echo isset($_SESSION["errors"]) ? showError($_SESSION["errors"], "password") : ""; ?>


                    <input class="btn-submit" name="submit" value="Registrarse" type="submit">
                </form>
                <?php deleteErrors(); ?>
                
            </div>