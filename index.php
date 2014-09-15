<?php 
	
	session_name('fabian');
	session_start();

	if(!empty($_SESSION) && $_SESSION['userLogued']==true){
		
		include('header.php');


		?>

		<div class="home" style="background: #00bcd4">
			
			<div class="container">
				
				<h1>Welcome <?php echo $_SESSION['userName']; ?></h1>

			</div>

		</div>

		<?php

		include('footer.php');
	
	}else{

		header('location:login.php');
	}



?>

