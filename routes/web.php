<?php

include "Route.php";
use Route\Route;

$route = new Route();

$route->get('/administrator/dashboard', '\App\Controllers\Administrator\DashboardController@index');

/** Route Category */
$route->get('/administrator/category/list', '\App\Controllers\Administrator\CategoryController@list');
$route->get('/administrator/category/insert', '\App\Controllers\Administrator\CategoryController@showFormInsert');
$route->post('/administrator/category/insert', '\App\Controllers\Administrator\CategoryController@insert');

$route->get('/this/is/the/.+/story/of/.+', function($first, $second) {
	echo "This is the $first story of $second";
});

