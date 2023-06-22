<?php 
	session_start();
	require("./conn.php");
	$slider = $conn -> query("SELECT * FROM tour.slide ORDER BY id DESC");
?>