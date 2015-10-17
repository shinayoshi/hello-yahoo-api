<?php
require( dirname(__FILE__).'/libs/Smarty.class.php' );
require( dirname(__FILE__).'/libs/YahooAPI.class.php' );

$smarty = new Smarty();
$smarty->template_dir = dirname(__FILE__).'/templates/';
$smarty->compile_dir = dirname(__FILE__).'/templates_c/';
$smarty->config_dir = dirname(__FILE__).'/configs/';

$smarty->configLoad('yapi.ini');

$sentence = htmlspecialchars($_POST['sentence']);

$appid = $smarty->getConfigVariable('appid');
$yapi = new YahooAPI($appid);
$result = $yapi->kousei($sentence);

$smarty->assign('req_text', $sentence);
$smarty->assign('res_kousei', htmlspecialchars(print_r(new SimpleXMLElement($result), true)));

$smarty->assign('title', $smarty->getConfigVariable('title'));
$smarty->assign('copyright', $smarty->getConfigVariable('copyright'));

$smarty->display('kousei.tpl');

?>
