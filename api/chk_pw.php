<?php include '../base.php';
if($Mem->count($_GET)){
    echo $Mem->count($_GET);
    $_SESSION['login']=$_GET['acc'];
}
?>