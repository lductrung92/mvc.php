<?php

namespace App\Models;
include 'Database.php';

class Model
{
	private $con;
	protected $table;
	protected $obj;

	/**
	 * Model constructor.
	 * @param $table
	 * @param $obj
	 */
	function __construct($table, $obj)
	{
		$db = new Database();
		$this->table = $table;
		$this->obj = $obj;
		$this->con = $db->db_con();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	function findById($id)
	{
		$sql = "SELECT * FROM {$this->table} WHERE id={$id}";
		$result = $this->con->query($sql);
		if($result->num_rows > 0) {
			foreach ($result as $key => $item)
			{
				$this->obj->{$key} = $item;
			}
		}
		$this->con->close();
		return $this->obj;
	}

	/**
	 * @return array
	 */
	function findAll()
	{
		$sql = "SELECT * FROM {$this->table}";
		$result = $this->con->query($sql);
		$arrResult = array();

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				foreach ($row as $key => $item)
				{
					$this->obj->{$key} = $item;
				}
				$arrResult[] = $this->obj;
			}
		}
		$this->con->close();
		return $arrResult;
	}

	function update($obj)
	{
		foreach ($obj as $arr)
		{
			var_dump($arr);
		}
	}

	/**
	 * @param $sql
	 * @return array
	 */
	function raw($sql)
	{
		$result = $this->con->query($sql);
		$arrResult = array();

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				foreach ($row as $key => $item)
				{
					$this->obj->{$key} = $item;
				}
				$arrResult[] = $this->obj;
			}
		}
		$this->con->close();
		return $arrResult;
	}


}