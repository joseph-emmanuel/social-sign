<?php

if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['pwd'];
    $passwordRepeat= $_POST['pwd-repeat'];

    if (empty($username)||empty($email)||empty($password)||empty($password)){
        header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("location: ../signup.php?error=invalidemiluid");
        exit();
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("location: ../signup.php?error=invalidemil&uid=".$username);
        exit();
    }
//    elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
//        header("location: ../signup.php?error=invaliduid&mail=".$email);
//        exit();
//    }
    elseif ($password!==$passwordRepeat){
        header("location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email);
        exit();
    }
    else{
        $sql="select uidUsers from users where uidUsers=?";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../signup.php?error=sqlerror1");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck=mysqli_stmt_num_rows($stmt);
            if ($resultCheck>0){
                header("location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else{
                $sql="insert into users(uidUsers,emailUsers,pwdUsers) values(?,?,?)";
                $stmt=mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)){
                    header("location: ../signup.php?error=sqlerror2");
                    exit();
                }
                else{
                    $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../signup.php?signup=sucess");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($conn);
}
else{
    header("location: ../signup.php?");
    exit();
}