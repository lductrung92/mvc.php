<?php

namespace App\Requests;

class Request
{
	private $_request;

	/**
	 * Request constructor.
	 * @param null $get
	 * @param null $post
	 */
	public function __construct($get = null, $post = null)
	{
		if(!empty($get)) {
			$this->_request = $get;
		}
		if (!empty($post)) {
			$this->_request = $post;
		}
	}

	/**
	 * @param $request
	 * @return bool
	 */
	public function has($request)
	{
		if(isset($_POST[$request]) || isset($_GET[$request])) return true;
		return false;
	}

	/**
	 * @param $request
	 * @return null
	 */
	public function get($request)
	{
		foreach ($this->_request as $key => $value)
		{
			if($key === $request) return $value;
		}
		return null;
	}



}

