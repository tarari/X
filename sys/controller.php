<?php
	namespace X\Sys;

	use X\Sys\Registry;
	/**
	*
	*   Controller: the base controller
	*     in MVC systems
	*
	*   Allows pass data between views and controller
	*   and between models and controllers
	*
	**/
	class Controller{
		protected $model;
		protected $view;
		protected $params;
		protected $dataView=array();// mechanism for passing data to views
		protected $conf; //object configuration data
		protected $app; //app version and title data
		
		function __construct($params=null,$dataView=null){
			$this->params=$params;
			$this->conf=Registry::getInstance();
			$this->app=(array)$this->conf->app;
			$this->addData($this->app);
			
		}
		/**
		 *   Merge two arrays
		 * 
		 *   Merge arrays in dataView array
		 *   @param array $array
		 * 
		 * 
		 * */
		protected function addData($array){
			if(is_array($array) && is_array($this->dataView)){
				$this->dataView=array_merge($this->dataView,$array);
			}else{
				$this->dataView=$array;
			}

		}
		function error(){
            $this->msg='Error. Action not defined';
         }
		
		function ajax($output){
			ob_clean();
			if(is_array($output)){
				echo json_encode($output);
			}
		}

	}