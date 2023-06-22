<?php 
	session_start();
	require("./conn.php");
	if (isset($_GET["slide"])) {
		$id = $_GET['slide'];
		$img = $_GET['img'];
		if ($conn -> query("DELETE FROM tour.slide WHERE id=$id") && unlink($img)) {
			$_SESSION['removing'] = 1;
			header("location:admin.php");
		}
	}
?>