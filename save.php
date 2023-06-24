<?php 
	session_start();
	require("conn.php");
	if (isset($_POST['addSlide'])) {
		$text = $_POST["text"];
		$image = "";
		if ($_FILES["slide"]["name"] != '') {
            $test = explode(".",$_FILES["slide"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["slide"]["tmp_name"],$l);
            $image = './img/'.$namef;
        }

        if ($image != "" && $text != "" && $conn -> query("INSERT INTO slide(text,img) VALUES('$text','$image')")) {
        	$_SESSION['adding'] = "Slide";
        	header("location:admin.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:admin.php");
        }
	}
	
	if (isset($_POST["addVideoInfo"])) {
		$info = $_POST["info"];
		$theme = $_POST["theme"];
		$iframe = $_POST["iframe"];
		if ($iframe != "" && $theme != "" && $info != "" && $conn -> query("INSERT INTO tour.videoinfo(theme,info,iframe) VALUES('$theme','$info','$iframe')")) {
        	$_SESSION['adding'] = "Video inforamtion about the tour";
        	header("location:admin.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:admin.php");
        }
	}

	if (isset($_POST['addTour'])) {
		$info = $_POST["info"];
		$theme = $_POST["theme"];
		$best = 0;
		if (isset($_POST["best"])) {
			$best = 1;
		}
		$popular = 0;
		if (isset($_POST["popular"])) {
			$popular = 1;
		}
		$style = $_POST["styleClass"];
		$image;
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-tour".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            $image = './img/'.$namef;
        }

        if ($image != "" && $info != "" && $theme != "" && $style != "" && $conn -> query("INSERT INTO tour.tour(theme, info, img, style, popular, best) VALUES('$theme','$info','$image','$style','$popular','$best')")) {
        	
        	$_SESSION['adding'] = "Tour";
        	header("location:aTour.php");
        
        	
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aTour.php");
        }
	}

	if (isset($_POST["tourMoreInfo"])) {
		$info = $_POST["info"];
		$id_cate = $_POST["id_cate"];
		$type = $_POST["type"];
		if ($conn -> query("INSERT INTO tour.moreinfo(info,id_cate, type) VALUES('$info',$id_cate, $type)")) {
        	$_SESSION['adding'] = "Tour inforamtion ";
        	header("location:aTour.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aTour.php");
        }
	}
?>