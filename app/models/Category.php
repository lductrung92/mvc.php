<?php 

namespace App\Models;
include __PATH__ . '/app/object/Category.php';
include 'Model.php';

use App\Object\Category as CateClass;

class Category extends Model {

	protected $table = 'categories';

	/**
	 * Category constructor.
	 */
	function __construct()
	{
		parent::__construct($this->table, new CateClass());
	}
}
?>