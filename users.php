<?php
require 'includes/dbh.inc.php';

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"

              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>To Do</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link  href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/slideshow.css">
        <link rel="stylesheet" href="assets/css/heading.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/sign_up.css">
    </head>
    <body>

    <nav>
        <div class="logo">
            <img class="logoimage" src="assets/icons/Logo.png" alt="">
            <h4>SOCIAL SIGN</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">Users</a></li>
            <li class="id1">
                <a href="#">Requests</a>
            </li>
            <li class="id1">
                <a href="#">Messages</a>
            </li>
            <li class="id1">
                <a href="#">Logout</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>

        </div>
    </nav>

    <div class="typewriter">
        <h1>Welcome Admin</h1>
    </div>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/slideshow.js"></script>

<?php
require "phps/footer.php"
?>