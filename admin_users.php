<?php

require_once 'includes/init.inc.php';
$itemsQuery=$db->prepare("select * from users");
$itemsQuery->execute();
$items=$itemsQuery->rowCount()?$itemsQuery:[];

//foreach ($items as $item) {
//    echo $item['content'],'<br>';
//
//}
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
    <link  href="assets/css/pstyle.css" rel="stylesheet">
    <link  href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slideshow.css">
    <link rel="stylesheet" href="assets/css/heading.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/sign_up.css">
    <link  href="assets/css/pstyle.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="list">
        <h1 class="header"> Current Users</h1>
        <?php if (!empty($items)):?>
            <ul class="items">
                <?php foreach ($items as $item):?>
                    <li><span class="item"><?php echo $item['uidUsers']; ?> </span>

                            <a href="admin_mark.php?as=done&item=<?php echo $item['idUsers']; ?>" class="done-button"> Delete this user</a>

                    </li>
                <?php endforeach;?>
            </ul>
        <?php else:?>
            <p>You haven't have  any items to approve yet</p>
        <?php endif;?>
    </div>
    <!--<div style="text-align:center">-->
    <!--    <span class="dot"></span>-->
    <!--    <span class="dot"></span>-->
    <!--    <span class="dot"></span>-->
    <!--    <span class="dot"></span>-->
    <!--    <span class="dot"></span>-->
    <!--</div>-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/slideshow.js"></script>
</body>
</html>