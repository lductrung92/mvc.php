<?php

	function env($env_config, $config = null) {
		return !empty($_ENV[$env_config]) ? $_ENV[$env_config] : $config;
	}

	return [
		'default' => env('DB_CONNECTION', 'mysql'),
		'mysql' => [
			'host' => env('DB_HOST', '127.0.0.1'),
			'port' => env('DB_PORT', '3306'),
			'database' => env('DB_DATABASE', 'blog'),
			'username' => env('DB_USERNAME', 'root'),
			'password' => env('DB_PASSWORD', ''),
			'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
		]
	];

?>