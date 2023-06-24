<?php 
	session_start();
	require("./conn.php");
	if (isset($_GET["slide"])) {
		$id = $_GET['slide'];
		$img = $_GET['img'];
		if ($conn -> query("DELETE FROM tour.slide WHERE id=$id") && unlink($img)) {
			$_SESSION['removing'] = "Slide";
			header("location:admin.php");
		}
	} else if (isset($_GET["videoinfo"])) {
		$id = $_GET['videoinfo'];
		if ($conn -> query("DELETE FROM tour.videoinfo WHERE id=$id")) {
			$_SESSION['removing'] = "Video information about the tour";
			header("location:admin.php");
		}
	}
?>