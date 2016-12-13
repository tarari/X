<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Home extends Controller{
   		protected $model;
   		protected $view;
   		protected $params;

   		public function __construct($params){
   			parent::__construct($params);
   			$this->model=new \X\App\Models\mHome();
   			$this->view =new \X\App\Views\vHome();
   		}

   		function home(){
   			echo 'HOME!!';
   		}
   }
