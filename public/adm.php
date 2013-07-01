<?php
require_once "../vendor/autoload.php";
require_once '../App/config/config.php';
require_once './logout.php';

//$data ="olá mundo";
//$smarty->assign('data',$data);
$smarty->display('adm_layout.tpl');
?>
