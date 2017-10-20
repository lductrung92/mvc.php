<?php 

namespace App\Models;

class Database
{
	private $db_config;
	private $connect;

	/**
	 * Database constructor.
	 */
	function __construct()
	{
		$this->db_config = require __PATH__ . '/config/database.php';
		$this->connect = new \mysqli($this->db_config[$this->db_config['default']]['host'],
			$this->db_config[$this->db_config['default']]['username'],
			$this->db_config[$this->db_config['default']]['password'],
			$this->db_config[$this->db_config['default']]['database']);
		if (!$this->connect) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}

	/**
	 * @return \mysqli
	 */
	function db_con()
	{
		return $this->connect;
	}

	/**
	 * @return bool
	 */
	function close()
	{
		return mysqli_close($this->connect);
	}
}

