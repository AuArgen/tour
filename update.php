<?php 
	session_start();
	require("conn.php");
	if (isset($_POST['updateSlide'])) {
		$text = $_POST["text"];
		$image = $_POST["limg"];
		$id = $_POST["id"];
		if ($_FILES["slide"]["name"] != '') {
            $test = explode(".",$_FILES["slide"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["slide"]["tmp_name"],$l);
            unlink($image);
            $image = './img/'.$namef;
        } 

        if ($conn -> query("UPDATE tour.slide SET text = '$text', img = '$image' WHERE id = $id")) {
        	$_SESSION['updated'] = "Slide";
        	header("location:admin.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:admin.php");
        }
	} else if (isset($_POST["updateSos"])) {
		$whatsapp = $_POST["whatsapp"];
		$instagram = $_POST["instagram"];
		$tiktok = $_POST["tiktok"];
		$phone = $_POST["phone"];
		if ($conn -> query("UPDATE tour.social SET whatsapp='$whatsapp', instagram='$instagram', tiktok='$tiktok',phone='$phone' WHERE id = 1")) {
        	$_SESSION['updated'] = "Social";
        	header("location:admin.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:admin.php");
        }
	} else if (isset($_POST['updateWebsite'])) {
		$name = $_POST["name"];
		$info = $_POST["info"];
		$image = $_POST["logol"];
		$id = 1;
		if ($_FILES["logo"]["name"] != '') {
            $test = explode(".",$_FILES["logo"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-logo".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["logo"]["tmp_name"],$l);
            unlink($image);
            $image = './img/'.$namef;
        } 

        if ($conn -> query("UPDATE tour.website SET name = '$name',info = '$info', logo = '$image' WHERE id = $id")) {
        	$_SESSION['updated'] = "Website info";
        	header("location:admin.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:admin.php");
        }
	} else if (isset($_POST['updateVideoInfo'])) {
		$id = $_POST["id"];
		$info = $_POST["info"];
		$theme = $_POST["theme"];
		$iframe = $_POST["iframe"];
        if ($conn -> query("UPDATE tour.videoinfo SET theme = '$theme',info = '$info', iframe = '$iframe' WHERE id = $id")) {
        	$_SESSION['updated'] = "Video inforamtion ". $theme;
        	header("location:admin.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:admin.php");
        }
	}

	
?>