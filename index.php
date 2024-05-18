<?php

require_once 'functions.php';

header('Content-type: application/json');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestOptions = explode('/', $_GET['q'] ?? '');

if($requestOptions === ['']) {
	sendFailResponse('Invalid request syntax.', 400);
	
	return;
}

if($requestMethod === 'GET' && $requestOptions[0] === 'posts') {
	getPosts();
	
	return;
}

if($requestMethod === 'GET' && $requestOptions[0] === 'online') {
	getOnline();
	
	return;
}

sendFailResponse('Invalid request syntax.', 400);
