<?php 

namespace App\Models;
include __PATH__ . '/app/object/Category.php';
include 'Model.php';

use App\Object\Category as CateClass;

class Category extends Model {

	private $table = 'categories';
	private $fillable = ['cid', 'serial', 'title', 'slug', 'description', 'status'];
	/**
	 * Category constructor.
	 */
	function __construct()
	{
		parent::__construct($this->table, $this->fillable, new CateClass());
	}
}
?>