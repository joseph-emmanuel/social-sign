<?php
require "phps/header.php";
session_start();
//echo 'Hi, ' . $_SESSION["userMail"] ;
//if ($_SESSION["userMail"]==null)
//{
//    echo 'not logged in';
//}
//else
//{
////    echo 'you are  logged in as ' .$_SESSION["userUId"];
//}
?>
<div id=containerx12>
    Speak for
    <div id=flip>
        <div><div>rights</div></div>
        <div><div>lifeStyle</div></div>
        <div><div>Everything</div></div>
    </div>
    you want!
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
        <div class="text">Women Rights</div>
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
