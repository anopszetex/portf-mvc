<?php  
	namespace controllers;

	class HomeController extends Controller {

		function __construct($view, $model) {
			parent::__construct($view, $model);
		}

		public function index() {
			$this->view->render('home');
		}

	}
?>