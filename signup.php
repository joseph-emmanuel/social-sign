<?php
require "phps/header.php"
?>

<div class="typewriter">
    <h1>Please enter your credentials</h1>
</div>
<!-- delete -->
<form action="includes/signup.inc.php" method="post" class="form_sign">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit"  name="signup-submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
</form>




<!-- till here -->


<script src="assets/js/app.js"></script>
<script src="assets/js/slideshow.js"></script>




<?php
require "phps/footer.php"
?>
