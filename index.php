<?php
require './libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';
$fruits = array('ringo', 'mikan', 'budou');
$smarty->assign('fruits', $fruits);
// $smarty->assign("test1", "t1");
// $smarty->assign("test2", "t2");
// $smarty->assign("test3", "t3");
$smarty->display('index.tpl');
?>

