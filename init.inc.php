<?php

session_start();
//$_SESSION['user_id']=1001;
//$dbName="todo";
//$
$db=new PDO('mysql:dbname=social_sign;host=localhost','root','');
//handle this in some other way
if (!isset($_SESSION['userId'])){
    die('you are not signed in');
}
