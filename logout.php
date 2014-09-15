<?php

	session_name('fabian');
	session_start();

	if(!empty($_SESSION)){
		$_SESSION = array();
		session_destroy();
	}

	header('Location: index.php');

?>