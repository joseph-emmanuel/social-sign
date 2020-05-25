<?php
require "phps/header.php";
require_once 'includes/init.inc.php';
echo $_SESSION['userId'];
$itemsQuery=$db->prepare("select * from content where uid=:user");
$itemsQuery->execute(['user'=>$_SESSION['userId']]);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="list">
    <h1 class="header"> Current Petitions</h1>
    <?php if (!empty($items)):?>
        <ul class="items">
            <?php foreach ($items as $item):?>
                <li><span class="item<?php echo $item['done']?'done':'' ?>"><?php echo $item['content']; ?> </span>
                    <?php if (!$item['done']):?>
                        <a href="mark.init.php?as=done&item=<?php echo $item['cid']; ?>" class="done-button"> Mark as signed</a>
                    <?php else:?>
                        <a href="mark.init.php?as=notdone&item=<?php echo $item['cid']; ?>" class="done-button"> Mark as not signed</a>
                    <?php endif;  ?>
                </li>
            <?php endforeach;?>
        </ul>
    <?php else:?>
        <p>You haven't have  any items to sign yet</p>
    <?php endif;?>
</div>
</body>
</html>