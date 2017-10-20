<?php

namespace App\Controllers\Administrator;
include __CTR__ . 'Controller.php';

use App\Controllers\Controller;

class DashboardController extends Controller
{
	public function index()
	{
		return $this->view('admin.index');
	}
}