<?php
require_once("../config/db.php");
require_once("../middelware/check_auth.php");
if(isset($_POST["nickname"],$_POST["email"],$_POST['password'])){
	$password=md5($_POST['password']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$nickname=mysqli_real_escape_string($conn,$_POST['nickname']);
	
	$sql="INSERT INTO `users`(`nickaname`, `email`, `password`) VALUES ('$nickname','$email','$password')";
	if($conn->query($sql) === TRUE){ 
		$_SESSION["email"]=$email;
		$_SESSION["nickname"]=$nickname;
		$_SESSION["id"]=mysqli_insert_id($conn);
		header("Location: /blog");
		exit();
	}
	
}
else{
	echo "need data man";
}
	
?>