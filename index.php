<?php  
	ob_start();

	$autoload = function($class) {
	$class    = str_replace('\\', '/', $class);
		if(file_exists("app/$class.php")) {
			include("app/$class.php");
		} else {
			die("Classe: $class não foi achada");
		}
	};

	spl_autoload_register($autoload);

	$app = new Application();
	$app->run();

	ob_end_flush();
?>