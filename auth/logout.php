<?php
	require_once("../config/db.php");
	session_destroy();
	session_unset();	
	header("Location: /blog");
	exit();	
?>