<?php
require './libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign("test1", "t1");
$smarty->assign("test2", "t2");
$smarty->assign("test3", "t3");
$smarty->display('index.tpl');
