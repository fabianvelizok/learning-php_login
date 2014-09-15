<?php
	
	session_name('fabian');
	session_start();

	define('site',1);
	
	$appResponse = array(

		'response' 	=> false,
		'message' 	=> 'Error en la App',
		'content' 	=> ''

	);


	if(isset($_POST) && !empty($_POST) && isset($_POST['action'])){

		include_once('functions.php');

		if($errorDb == false){

			switch ($_POST['action']) {

				case 'login':

					$appResponse['response'] = userLogin($_POST, $mysqli);
					$appResponse['message'] = '';

				break;
				
				default:
					$appResponse['message'] = 'Opción incorrecta';
				break;
			}
			
		}else{
			$appResponse['message'] = 'Error al conectar con la base de datos';
		}



	}else{

		$appResponse['message'] = 'Opción incorrecta';
	}
	
	echo json_encode($appResponse);

?>