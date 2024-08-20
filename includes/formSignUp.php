

<!-- form sign up -->
        <div id="box-signup" class="box-signup">

                <!-- inicio del formulario -->
                <div class="form-signup-init">
                    <h2>Sign up</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>if you have account <button id="changeLogin" class="btn-change">click here</button></p>
                </div>
                <hr>

                <!-- formulario -->
                <form action="./signup.php" method="POST" class="form-signup" >
                    <label>Name:</label>
                    <input placeholder="Name" name="name" type="text">
                    <?php echo isset($_SESSION["errors"]) ?  showError($_SESSION["errors"], "name") : ""; ?>

                    <label>Surname:</label>
                    <input placeholder="Surname" name="surname" type="text">
                    <?php echo isset($_SESSION["errors"]) ? showError($_SESSION["errors"], "surname") : ""; ?>

                    <label>Email:</label>
                    <input placeholder="Email" name="email" type="email">
                    <?php echo isset($_SESSION["errors"]) ? showError($_SESSION["errors"], "email") : ""; ?>

                    <label>Password: </label>
                    <input placeholder="Password" name="password" type="password">
                    <?php echo isset($_SESSION["errors"]) ? showError($_SESSION["errors"], "password") : ""; ?>


                    <input class="btn-submit" name="submit" value="Sign Up" type="submit">
                </form>
                <?php deleteErrors(); ?>
                
            </div>