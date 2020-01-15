<?php  
	namespace controllers;

	abstract class Controller {

		protected $view;
		protected $model;

		function __construct($view, $model) {
			$this->view  = $view;
			$this->model = $model;
		}

	}
?>