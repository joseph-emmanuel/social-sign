<?php
require "phps/header.php";
?>



<form action="includes/user_request.inc.php" class="content" method="post">
    <label for="content">Enter your request</label><br>
    <textarea name="content" cols="45" rows="5"></textarea><br><br>
    <input type="submit" value="Send Request">
</form>
<script src="assets/js/app.js"></script>
<script src="assets/js/slideshow.js"></script>
<?php
require "phps/footer.php"
?>
