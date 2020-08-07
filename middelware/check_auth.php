<?php 
require_once("../config/db.php");


	if (isset($_SESSION["email"],$_SESSION["nickname"],$_SESSION["id"])) {
		header("Location: /blog");
		exit();
	}

?>
