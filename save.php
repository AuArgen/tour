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
		$price = $_POST["price"];
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

        if ($image != "" && $info != "" && $theme != "" && $price != "" && $style != "" && $conn -> query("INSERT INTO tour.tour(theme,price, info, img, style, popular, best) VALUES('$theme',$price,'$info','$image','$style','$popular','$best')")) {
        	
        	$_SESSION['adding'] = "Tour";
        	header("location:aTour.php");
        
        	
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aTour.php");
        }
	}

	if (isset($_POST["moreInfo"])) {
		$pageA = ["Tour","Location","Lodging"];
		$info = $_POST["info"];
		$id_cate = $_POST["id_cate"];
		$type = $_POST["type"];
		if ($conn -> query("INSERT INTO tour.moreinfo(info,id_cate, type) VALUES('$info',$id_cate, $type)")) {
        	$_SESSION['adding'] = $pageA[$type-1]." inforamtion ";
        	header("location:a".$pageA[$type-1].".php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:a".$pageA[$type-1].".php");
        }
	}

	if (isset($_POST["addLocation"])) {
		$info = $_POST["info"];
		$theme = $_POST["theme"];
		$price = $_POST["price"];
		$style = $_POST["styleClass"];
		$image;
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-bestLocation".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            $image = './img/'.$namef;
        }

        if ($image != "" && $info != "" && $theme != "" && $price != "" && $style != "" && $conn -> query("INSERT INTO tour.location(theme,price, info, img, style) VALUES('$theme',$price,'$info','$image','$style')")) {
        	
        	$_SESSION['adding'] = "Best Location";
        	header("location:aLocation.php");
        
        	
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aLocation.php");
        }
	}

	if (isset($_POST["addLodging"])) {
		$info = $_POST["info"];
		$name = $_POST["name"];
		$price = $_POST["price"];
		$style = $_POST["styleClass"];
		$image;
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-lodging".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            $image = './img/'.$namef;
        }

        if ($image != "" && $info != "" && $name != "" && $price != "" && $style != "" && $conn -> query("INSERT INTO tour.lodging(name,price, info, img, style) VALUES('$name',$price,'$info','$image','$style')")) {
        	
        	$_SESSION['adding'] = "Lodging ".$name;
        	header("location:aLodging.php");
        
        	
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aLodging.php");
        }
	}

	if (isset($_POST["contact"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		if ($name != "" and $email != "" and $message != "") {
			$r = $conn -> query("INSERT INTO tour.contact (`name`,`email`, `message`, `show`,`dates`) VALUES('$name', '$email', '$message',0,now())");
			header("location:./?contact");
		}
	}

	if (isset($_POST["team"])) {
		$name = $_POST["name"];
		$description = $_POST["description"];
		$whatsapp = $_POST["whatsapp"];
		$facebook = $_POST["facebook"];
		$instagram = $_POST["instagram"];
		$image;
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-team".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            $image = './img/'.$namef;
        }
		if ($name != "") {
			$r = $conn -> query("INSERT INTO tour.team (`name`,`description`, `img`, `whatsapp`,`instagram`,`facebook`) VALUES('$name', '$description', '$image','$whatsapp','$instagram','$facebook')");
			$_SESSION['adding'] = $name;
			header("location:aTeam.php");
		}
	}
?>