<?php
require( dirname(__FILE__).'/libs/Smarty.class.php' );

$smarty = new Smarty();
$smarty->template_dir = dirname(__FILE__).'/templates';
$smarty->compile_dir = dirname(__FILE__).'/templates_c';
$smarty->config_dir = dirname(__FILE__).'/configs';

$smarty->configLoad('yapi.ini');

$smarty->assign('title', $smarty->getConfigVariable('title'));
$smarty->assign('copyright', $smarty->getConfigVariable('copyright'));
$smarty->display('index.tpl');

?>