<?php

namespace App\Controllers;

class Controller
{
	protected $_data = array();
	protected $_render = FALSE;

	public function view($template, $data = null)
	{
		try{
			$path_file = str_replace('.', '/',strtolower($template));
			$file = __PATH__ . '/resources/views/' . $path_file . '.php';
			if(file_exists($file)){
				$this->_render = $file;

				/**
				 * pass data to view
				 */
				if(!empty($data)) {
					foreach ($data as $key => $value) {
						$this->_data[$key] = $value;
						extract($this->_data);
					}
				}

			} else {
				throw new \Exception('View ' . $template . ' not found!');
			}
		}catch (\Exception $e)
		{
			echo $e->getMessage();
		}

		return include($this->_render);
	}



}