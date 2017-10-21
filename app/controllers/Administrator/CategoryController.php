<?php

namespace App\Controllers\Administrator;
include __CTR__ . 'Controller.php';

use App\Controllers\Controller;
use App\Requests\Request;

class CategoryController extends Controller
{
	public function getList()
	{

	}

	public function showFormInsert()
	{
		return $this->view('admin.category.insert');
	}

	public function insert(Request $request)
	{
		var_dump($request);

	}
}