<?php
require_once 'includes/init.inc.php';

if (isset($_GET['as'],$_GET['item'])){
    $as=$_GET['as'];
    $item=$_GET['item'];
    echo $as;
    print_r($as);
    echo $_SESSION['userId'];
    print_r($item);

    switch ($as){
        case 'done':
            $doneQuery=$db->prepare("update content set done=1 where cid=:item and uid=:user");
            $doneQuery->execute(['item'=>$item,'user'=>$_SESSION['userId']]);
            break;
        case 'notdone':
            $doneQuery=$db->prepare("update content set done=0 where cid=:item and uid=:user");
            $doneQuery->execute(['item'=>$item,'user'=>$_SESSION['userId']]);
            break;
    }

}
header('Location:user_petitions.php');