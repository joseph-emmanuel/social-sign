<?php
require 'includes/dbh.inc.php';

    $user = "Admin";
    $email ="admin@myself.com";
    $sql="select * from users where uidUsers!=? or emailUsers!=?;";
    $stmt=mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../index.php?error=sqlerror1");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ss", $user, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
//        while ($row = mysqli_fetch_array($result)) {
////            echo $row['uidUsers']; // Print a single column data
//        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
            <a href="admin_users.php">Users</a></li>
        <li class="id1">
            <a href="admin_petitions.php">Requests</a>
        </li>
        <li class="id1">
            <a href="#">Messages</a>
        </li>
        <li class="id1">
            <a href="index.php">Logout</a>
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
require  "phps/footer.php"
?>