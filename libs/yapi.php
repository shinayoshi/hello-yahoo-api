<?php
header('Content-Type: application/xml');

require( dirname(__FILE__).'/YahooAPI.class.php');

$sentence = htmlspecialchars($_POST['sentence']);

$appid = 'dj0zaiZpPU0ya3d3QXJSS2lrMSZzPWNvbnN1bWVyc2VjcmV0Jng9MTE-';
$yapi = new YahooAPI($appid);
$data = $yapi->parse($sentence);

echo $data;
?>