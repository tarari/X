<?php
	namespace X\Sys;
	/**
	*
	*   Controller: the base controller
	*     in MVC systems
	*
	*
	*
	**/
	class Controller{
		protected $model;
		protected $view;
		protected $params;
		function __construct($params){
			$this->params=$params;
		}
		function ajax($output){
			ob_clean();
			if(is_array($output)){
				echo json_encode($output);
			}
		}

	}