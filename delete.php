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
	} else if (isset($_GET["pages"])) {
		$id = $_GET['pages'];
		$img = $_GET['img'];
		$type = $_GET['type'];
		$pageA = ["Tour","Location","Lodging"];
		$d = ["tour","location","lodging"];
		$d = $d[$type-1];
		unlink($img);
		if ($conn -> query("DELETE FROM tour.$d WHERE id=$id") && $conn -> query("DELETE FROM tour.moreinfo WHERE type = $type and id_cate = $id")) {
			$_SESSION['removing'] = $pageA[$type - 1];
			header("location:a".$pageA[$type-1].".php");
		}
	} else if (isset($_GET["contact"])) {
		$id = $_GET['contact'];
		$name = $_GET['name'];
		if ($conn -> query("DELETE FROM tour.contact WHERE id=$id") ) {
			$_SESSION['removing'] =$name;
			header("location:aContact.php");
		}
	} else if (isset($_GET["team"])) {
		$id = $_GET['team'];
		$img = $_GET['img'];
		if ($conn -> query("DELETE FROM tour.team WHERE id=$id") && unlink($img) ) {
			$_SESSION['removing'] =$name;
			header("location:aTeam.php");
		}
	}
?>