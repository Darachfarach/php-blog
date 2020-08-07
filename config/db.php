<?php
	$servename="localhost";
	$username="root";
	$password="";
	$dbname="blog";
	$conn= new mysqli($servename,$username,$password,$dbname);
	if($conn->connect_error){
		die("Connection failed " . $conn->connect_error);
	}
	session_start();
?>