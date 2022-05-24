<?php
$controller = 'payments';

if (!isset($_REQUEST['c'])) {
	require_once 'controller/' . $controller . '.php';
	$controller = ucwords($controller) . 'Controller';
	$controller = new $controller;
	$controller->index();
} else {
	$controller = strtolower($_REQUEST['c']);
	$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

	require_once 'controller/' . $controller . '.php';
	$controller = ucwords($controller) . 'Controller';
	$controller = new $controller;

	call_user_func([$controller, $action]);
}
