<?php
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="UTF-8">
		<title>Login User</title>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,100,400' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="/stylesheet/all.css">

		<link rel="stylesheet" href="/stylesheet/jquery-ui.min.css">
		<link rel="stylesheet" href="/stylesheet/jquery-ui.theme.min.css">
		
		<!--Loader-->
		<link rel="stylesheet" href="http://css-spinners.com/css/spinner/dots.css" type="text/css">

		<script src="js/vendor/jquery-1.11.0.min.js"></script>
		<script src="js/vendor/jquery.validate.min.js"></script>
		<script src="js/vendor/jquery-ui.js"></script>
		<script src="js/vendor/messages_es_AR.js"></script>
		<script src="js/main.js"></script>

	</head>

	<body>
		
		<!--.containerPage-->
		<div class="containerPage">


			<header>
				<div class="container">
					
					<a href="/" class="logo">Logo</a>	

					<?php 

						if($_SESSION['userLogued']==true){ ?>
							
							<div class="settings" id="js-settings">
								<i class="icon-config"></i>
								<ul>
									<li><a href="javascript:void(0)"><?= $_SESSION['userName']; ?></a></li>
									<li><a href="config_account.php">Config Account</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</div>
						
						<?php }	?>
				</div>
			</header>

			<!--.mainContent-->
			<div class="mainContent">

				<div class="fullScreen" id="js-fullScreen">
					<div class="boxDots">						
						<div class="dots ">
							Loading...
						</div>
					</div>
				</div>