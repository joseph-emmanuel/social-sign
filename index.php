<?php
require "phps/header.php";
session_start();
echo 'Hi, ' . $_SESSION["userMail"] ;
?>
<div class="typewriter">
    <h1>You can speak for</h1>
</div>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/slideshow/animal.jpg" style="width:100%">
        <div class="text">Animal Rights</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/slideshow/environment.jpg" style="width:100%">
        <div class="text">Environment Rights Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/slideshow/human.jpg" style="width:100%">
        <div class="text">Human Rights</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/slideshow/student.jpg" style="width:100%">
        <div class="text">Student Rights</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/slideshow/women.jpg" style="width:100%">
        <div class="text">Human Rights</div>
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<script src="assets/js/app.js"></script>
<script src="assets/js/slideshow.js"></script>

<?php
require  "phps/footer.php"
?>
