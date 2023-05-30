	<?php
	session_start();
	unset($_SESSION['id_user']);
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['nama_user']);
	session_destroy();

	header("Location: login.php");


	?>