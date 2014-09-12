<?php

	define('SERVER','localhost');
	define('USER','roots');
	define('PASSWORD','');
	define('DATABASE','login');

	$errorDb = false;

	if(defined('SERVER') && defined('USER') && defined('PASSWORD') && defined('DATABASE')){

		$mysqli = new mysqli(SERVER, USER, PASSWORD, DATABASE);


		if(mysqli_connect_error())
			$errorDb = true;

		else
			$mysqli -> query("SET NAMES 'utf8'");


	}

?>

