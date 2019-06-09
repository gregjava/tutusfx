<?php
	session_start();
	
	if ( isset($_GET['logout']) ) {
		session_unset();
		session_destroy();
		header("Location: ../../eu/index.html");
		exit();
	}