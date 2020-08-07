<?php
require_once("../config/db.php");
require_once("../middelware/check_auth.php");
if(isset($_POST["nickname"],$_POST['password'])){
	$password=md5($_POST['password']);
	$nickname=mysqli_real_escape_string($conn,$_POST['nickname']);
	
	$sql="SELECT * FROM  `users` WHERE `nickaname`='$nickname' AND `password`='$password'";
	$result=$conn->query($sql);
	if ($result->num_rows > 0) {
		$data=mysqli_fetch_assoc($result);
		$_SESSION["email"]=$data["email"];
		$_SESSION["nickname"]=$data["nickaname"];
		$_SESSION["id"]=$data["u_id"];
		header("Location: /blog");
		exit();

	}	
	
}
else{
	echo "need data man";
}
	
?>