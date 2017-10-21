<?php

function url()
{
	return sprintf(
		"%s://%s%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		'/blog/'
	);
}

function csrf_token()
{
	$token = bin2hex(random_bytes(16));
	$_SESSION['csrf_token'] = $token;
	return $token;
}