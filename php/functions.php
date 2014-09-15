<?php

	if(!defined('site')) exit('<h1>404 not found</h1>');

	define('SERVER','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','login');

	$errorDb = false;


	function userLogin($data, $db){


		$logued = false;

		if(!empty($data) && !empty($db)){

			$email = trim($data['user_email']);
			$password = trim($data['user_password']);

			$query = "SELECT * FROM users WHERE user_email='$email' AND user_password='$password' AND user_status=1 LIMIT 1";

			$rsql = $db -> query($query);

			$numRows = $rsql -> num_rows;

			if($numRows!=0){


				$logued = true;

				$userData = $rsql -> fetch_assoc();

				$_SESSION['userLogued'] = true;
				$_SESSION['userName'] = $userData['user_name'].' '.$userData['user_last_name'];
				$_SESSION['userId'] = $userData['user_id'];


			}

		}

		return $logued;


	}


	if(defined('SERVER') && defined('USER') && defined('PASSWORD') && defined('DATABASE')){

		$mysqli = new mysqli(SERVER, USER, PASSWORD, DATABASE);


		if(mysqli_connect_error())
			$errorDb = true;

		else
			$mysqli -> query("SET NAMES 'utf8'");


	}

?>

