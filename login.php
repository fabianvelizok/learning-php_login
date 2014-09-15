<?php

	session_name('fabian');
	session_start();

	include('header.php'); 

?>

<div class="container">
	
	<div class="boxLogin">

		<h1>Login User</h1>
		
		<form class="loginForm" action="/" method="POST" id="js-loginForm">
			<div class="row">
				<input type="email" name="user_email" id="userEmail" placeholder="Email" class="email" required>
			</div>

			<div class="row">
				<input type="password" name="user_password" id="userPassword" placeholder="Password" required>
			</div>

			<div class="row error">
				<span>Usuario o clave incorrecto</span>
			</div>

			<div class="row">
				<input type="submit" id="js-loginButton" value="Login">
			</div>

		</form>

	</div>

</div>

<?php include('footer.php'); ?>