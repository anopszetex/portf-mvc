<?php  

	class Application {

		const DEFAULT = 'Home';

		public function run() {
			if(isset($_GET['url'])) {
				$url    = explode('/', $_GET['url']);
				$class  = 'controllers\\'.ucfirst($url[0]).'Controller';
			} else {
				$url[0] = self::DEFAULT;
				$class  = 'controllers\\'.$url[0].'Controller';
			}

			$view  = 'views\\View';
			$model = 'models\\'.ucfirst($url[0]).'Model';
			
			$controller = new $class(new $view, new $model);
			$controller->index();
		}

	}

?>