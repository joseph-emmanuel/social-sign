<?php
require_once '../init.inc.php';

if (isset($_GET['as'],$_GET['item'])){
    $as=$_GET['as'];
    $item=$_GET['item'];

    switch ($as){
        case 'done':
            $doneQuery=$db->prepare("update content set done=1 where cid=:item and user=:user");
            $doneQuery->execute(['item'=>$item,'user'=>$_SESSION['userId']]);
            break;
        case 'notdone':
            $doneQuery=$db->prepare("update items set done=0 where id=:item and user=:user");
            $doneQuery->execute(['item'=>$item,'user'=>$_SESSION['userId']]);
            break;
    }

}
header('Location:user_petitions.php');