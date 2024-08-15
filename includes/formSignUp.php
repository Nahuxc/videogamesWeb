<!-- form sign up -->
<div id="box-signup" class="box-signup">
                <div class="form-signup-init">
                    <h2>Sign up</h2>
                    <img src="./assets/img/logo.png" alt="">
                    <p>if you have account <button id="changeLogin" class="btn-change">click here</button></p>
                </div>
                <hr>
                <form action="./signup.php" method="POST" class="form-signup" >
                    <label>Name:</label>
                    <input placeholder="Name" name="name" type="text">
                    <label>Surname:</label>
                    <input placeholder="Surname" name="surname" type="text">
                    <label>Email:</label>
                    <input placeholder="Email" name="email" type="email">
                    <label>Password: </label>
                    <input placeholder="Password" name="password" type="password">
                    <input class="btn-submit" value="Sign Up" type="submit">
                </form>
            </div>