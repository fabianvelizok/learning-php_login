<?php

	$appResponse = array(

		'response' 	=> false,
		'message' 	=> 'Error en la App',
		'content' 	=> 'asdasd'

	);


	if(isset($_POST) && !empty($_POST) && isset($_POST['action'])){

		include('functions.php');

		if($errorDb == false){

			switch ($_POST['action']) {

				case 'login':

					$appResponse = array(

						'response' 	=> true,
						'message' 	=> 'AJAX LOCO!!',
						'content' 	=> '<div><h1>ajax</h1><div>'

					);

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