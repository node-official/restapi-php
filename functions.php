<?php

function sendResponse(string $responseContent, int $responseCode = 200) {
	http_response_code($responseCode);
	
	echo $responseContent;
}

function sendFailResponse(string $responseText, int $responseCode) {
	sendResponse(json_encode(['responseCode' => $responseCode, 'responseText' => $responseText]), $responseCode);
}

function getPosts() {
	$postList = [
		'postList' => [
			['postId' => 0, 'postTitle' => 'Мой первый пост в этой социальной сети!', 'postContent' => 'Моя первая социальная сеть работает без ошибок.'],
			['postId' => 1, 'postTitle' => 'Новое обновление социальной сети!', 'postContent' => 'Я добавил смайлики, стикеры, и другой тип информации в постах и сообщениях.'],
			['postId' => 2, 'postTitle' => 'Внедрение новой системы RestAPI для социальной сети!', 'postContent' => 'На данный момент Мы продолжаем внедрение новой системы RestAPI для нашей социальной сети.']
		]
	];
	
	sendResponse(json_encode($postList));
}

function getOnline() {
	$onlineServers = [
		'1' => [
			'serverPort' => 19132,
			'currentOnline' => 32,
			'maxOnline' => 40
		],
		'2' => [
			'serverPort' => 19133,
			'currentOnline' => 3,
			'maxOnline' => 40
		]
	];
	
	sendResponse(json_encode($onlineServers));
}
