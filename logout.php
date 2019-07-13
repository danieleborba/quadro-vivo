<?php

	if ($acao = 'logoff') {
		session_start();
		session_destroy();
		header('location:login.php');
	} 

?>
