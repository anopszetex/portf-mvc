<?php
	/*Configs*/
	date_default_timezone_set('America/Sao_Paulo');

	session_start();

	define('INCLUDE_PATH', 'http://localhost:8080/web-mvc/');
	define('INCLUDE_PATH_FULL', 'http://localhost:8080/web-mvc/app/');

	define('DB', array('HOST' => '', 'DBNAME' => '', 'USER' => '', 'PASSWORD' => ''));
?>