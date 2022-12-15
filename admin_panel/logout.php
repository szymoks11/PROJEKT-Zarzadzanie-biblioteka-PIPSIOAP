<?php

	session_start();
	
	session_unset();
	
	header('Location: logging_page.php');

?>