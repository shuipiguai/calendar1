<?php
date_default_timezone_set( 'Asia/Shanghai' );

$c = $_GET['c'];
$a = $_GET['a'];
$param = $_GET['param'];
echo $param;

if( empty($c) || empty($a) ){
	include( 'calendar_self.php' );
}else{
	$controller = ucfirst($c).'Controller';
	$action = $a.'Action';

	$path = $controller.'.php';

	require($path);

	$s = new $controller;

	$s->$action();
}
?>