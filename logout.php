<?php 
	session_start();
	unset($_SESSION["adminLogin"]);
	unset($_SESSION["adminPsw"]);
	header("location:login.php");
?>