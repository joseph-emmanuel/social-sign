<?php
require "phps/header.php"
?>

<div class="typewriter">
    <h1>Please enter your credentials</h1>
</div>
<!-- delete -->
<form action="includes/login.inc.php" method="post">
    <h2><span class="entypo-login"></i></span> Login</h2>
    <button class="submit" name="login-submit"><span class="entypo-lock"></span></button>

    <input type="text" name="mailuid" class="user" placeholder="ursername"/>

    <input type="password" name="pwd" class="pass"placeholder="password"/>
</form>
<!-- till here -->


<script src="assets/js/app.js"></script>
<script src="assets/js/slideshow.js"></script>




<?php
require "phps/footer.php"
?>
