<?php

namespace App\Controllers\Administrator;
include __CTR__ . 'Controller.php';

use App\Controllers\Controller;

class CategoryController extends Controller
{
	public function getList()
	{

	}

	public function showFormInsert()
	{
		return $this->view('admin.category.insert');
	}

	public function insert()
	{

	}
}