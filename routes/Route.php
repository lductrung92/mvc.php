<?php

namespace Route;
session_start();
include __REQ__ . 'Request.php';

use App\Requests\Request;

class Route
{

	/**
	 * @var string $_trim Class-wide items to clean
	 */
	private $_trim = '/\^$';

	/**
	 * add - Adds a URI and Function to the two lists. Method Get
	 *
	 * @param string $uri A path such as about/system
	 * @param object,string $function or String An anonymous function
	 */
	public function get($uri, $function)
	{
		if($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			if(trim($_GET['uri'], $this->_trim) === trim($uri, $this->_trim)) {
				$this->submit($uri, $function, $_GET);
			}
		}
	}

	/**
	 * add - Adds a URI and Function to the two lists. Method Post
	 *
	 * @param string $uri A path such as about/system
	 * @param object,string $function or String An anonymous function
	 */
	public function post($uri, $function)
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			if(isset($_SESSION['csrf_token']))
			{
				if(isset($_POST['_token'])) {
					if($_SESSION['csrf_token'] == $_POST['_token']) {
						if(trim($_SERVER['REQUEST_URI'], $this->_trim) === trim($uri, $this->_trim)) {
							$this->submit($uri, $function, null, $_POST);
						}
					} else {
						header('HTTP/1.1 401 Not authorized');
						echo 'token not authorized';
					}
				} else {
					header('HTTP/1.1 403 Forbidden');
					echo 'required token';
				}

			} else {
				header('HTTP/1.1 503 Service Temporarily Unavailable');
				header('Status: 503 Service Temporarily Unavailable');
				header('Retry-After: 300');
			}
			csrf_token();
		}


	}

	/**
	 * @param $uri
	 * @param $function
	 * @param null $get
	 * @param null $post
	 */
	private function submit($uri, $function, $get = null, $post = null)
	{
		if(is_string($function)){
			$ctr_method = explode('@',$function);
			require_once __PATH__ . $ctr_method[0] . '.php';
			$method = new $ctr_method[0]();
			$method->{$ctr_method[1]}(new Request($get, $post));
		} else {
			/**
			 * Pass an array for arguments
			 */
			$replacementValues = array();
			$fakeUri = explode('/', $uri);
			foreach ($fakeUri as $key => $value)
			{
				if ($value == '.+')
				{
					$replacementValues[] = $fakeUri[$key];
				}
			}
			call_user_func_array($function, $replacementValues);
		}
	}

}

