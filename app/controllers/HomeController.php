<?php

namespace App\Controllers;
include __PATH__ . '/app/models/Category.php';
include 'Controller.php';

class HomeController extends Controller
{
	public function index()
	{
		return $this->view('admin.index', array(
			'a' => 1
		));
	}
}