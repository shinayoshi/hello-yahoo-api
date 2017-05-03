<?php
header('Content-Type: application/xml');

$ini = parse_ini_file('../configs/yapi.ini');
require(dirname(__FILE__).'/YahooAPI.class.php');

$sentence = htmlspecialchars($_POST['sentence']);

$appid = $ini['appid'];
$yapi = new YahooAPI($appid);
$data = $yapi->parse($sentence);

echo $data;
?>
