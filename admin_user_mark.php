<?php
require_once 'includes/init.inc.php';

if (isset($_GET['as'],$_GET['item'])){
    $as=$_GET['as'];
    $item=$_GET['item'];
//    echo $as;
//    print_r($as);
//    echo $_SESSION['userId'];
//    print_r($item);

    switch ($as){
        case 'done':
            $doneQuery=$db->prepare("delete from users  where idUsers=:item ");
            $doneQuery->execute(['item'=>$item]);
            break;
    }

}
header('Location:admin_petitions.php');