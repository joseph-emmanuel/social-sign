<?php
require "phps/header.php"
?>

<div class="typewriter">
    <h1>Please enter your credentials</h1>
</div>
<!-- delete -->
<form action="includes/login.inc.php" method="post">
    <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Login</h2>
    <button class="submit" name="login-submit"><span class="entypo-lock"><i class="fa fa-lock"></i></span></button>
    <span class="entypo-user inputUserIcon">
           <i class="fa fa-user"></i>
         </span>
    <input type="text" name="mailuid" class="user" placeholder="ursername"/>
    <span class="entypo-key inputPassIcon">
           <i class="fa fa-key"></i>
         </span>
    <input type="password" name="pwd" class="pass"placeholder="password"/>
</form>
<!-- till here -->


<script src="assets/js/app.js"></script>
<script src="assets/js/slideshow.js"></script>




<?php
require "phps/footer.php"
?>
