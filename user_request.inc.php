<?php
require 'dbh.inc.php';
session_start();
//echo 'Hi, ' . $_SESSION["userMail"] ;
$content= $_POST['content'];
$uid= $_SESSION["userId"];
$done=0;
$approved=0;
//
//echo $content .'by';
//echo $uid;
//echo $done;
//echo $approved;
if (empty($content)){
    header("location: ../user_request.php?error=emptyfields&uid=".uid);
    exit();
}
else {
    $sql = "insert into content(content,uid,done,approved)values(?,?,0,0)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=sqlerror2");
        exit();
    } else {
//        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $content, $uid);
        mysqli_stmt_execute($stmt);
        header("location: user_request.php?sucess=trueeee");
        exit();
    }
    }
mysqli_stmt_close($stmt);
mysqli_stmt_close($conn);


