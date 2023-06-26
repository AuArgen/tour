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
	} else if (isset($_POST['updateTour'])) {
		$id = $_POST["id"];
		$info = $_POST["info"];
		$theme = $_POST["theme"];
		$price = $_POST["price"];
		$style = $_POST["styleClass"];
		$best = 0;
		if (isset($_POST["best"])) {
			$best = 1;
		}
		$popular = 0;
		if (isset($_POST["popular"])) {
			$popular = 1;
		}
		$image = $_POST["imgl"];
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-tour".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            unlink($image);
            $image = './img/'.$namef;
        }
        if ($conn -> query("UPDATE tour.tour SET theme = '$theme',price=$price,info = '$info', img = '$image', style = '$style', popular = '$popular', best = '$best'  WHERE id = $id")) {
        	$_SESSION['updated'] = "Tour, ". $theme;
        	header("location:atour.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:atour.php");
        }
	} else if (isset($_POST["moreInfo"])) {
		$info = $_POST["info"];
		$id = $_POST["id"];
		$type = $_POST["type"];

		$pageA = ["Tour","Location","Lodging"];
		if ($conn -> query("UPDATE tour.moreinfo SET info='$info' WHERE id = '$id' and type=$type")) {
        	$_SESSION['adding'] = $pageA[$type-1]." more inforamtion ";
        	header("location:a".$pageA[$type-1].".php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:a".$pageA[$type-1].".php");
        }
	} else if (isset($_POST['updateLocation'])) {
		$id = $_POST["id"];
		$info = $_POST["info"];
		$theme = $_POST["theme"];
		$price = $_POST["price"];
		$style = $_POST["styleClass"];
		$image = $_POST["imgl"];
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-bestLocation".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            unlink($image);
            $image = './img/'.$namef;
        }
        if ($conn -> query("UPDATE tour.location SET theme = '$theme',price=$price,info = '$info', img = '$image', style = '$style' WHERE id = $id")) {
        	$_SESSION['updated'] = "Best Location, ". $theme;
        	header("location:aLocation.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aLocation.php");
        }
	} else if (isset($_GET['contact'])) {
		$id = $_GET["contact"];
		 $r = $conn -> query("UPDATE tour.contact SET `show` = 1 WHERE id = $id");
		 $_SESSION["updated"] = "Showing message"; 
		 header("location:aContact.php");
	} else if (isset($_GET['about'])) {
		$info = $_GET["info"];
		$r = $conn -> query("UPDATE tour.about SET `info` = '$info'");
		$_SESSION["updated"] = "About"; 
		header("location:aAbout.php");
	} else if (isset($_GET['team'])) {
		$name = $_GET["name"];
		$description = $_GET["description"];
		$whatsapp = $_GET["whatsapp"];
		$facebook = $_GET["facebook"];
		$instagram = $_GET["instagram"];
		$image = $_GET["imgl"];
		$id = $_GET["id"];
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-team".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            unlink($image);
            $image = './img/'.$namef;
        }

        if ($conn -> query("UPDATE tour.team SET name = '$name',description = '$description', img = '$image', whatsapp = '$whatsapp', instagram = '$instagram', facebook = '$facebook' WHERE id = $id")) {
        	$_SESSION['updated'] = $name;
        	header("location:aTeam.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aTeam.php");
        } 

	} else if (isset($_POST['lodging'])) {
		$id = $_POST["id"];
		$info = $_POST["info"];
		$name = $_POST["name"];
		$price = $_POST["price"];
		$style = $_POST["styleClass"];
		$image = $_POST["imgl"];
		if ($_FILES["image"]["name"] != '') {
            $test = explode(".",$_FILES["image"]["name"]);
            $e = end($test);
            $namef = "IMG-Daniel-bestLocation".date("Y-m-d-H-i-s").''.rand(1,1000).'k.'.$e;
            $l = './img/'.$namef;
            move_uploaded_file($_FILES["image"]["tmp_name"],$l);
            unlink($image);
            $image = './img/'.$namef;
        }
        if ($conn -> query("UPDATE tour.lodging SET name = '$name',price=$price,info = '$info', img = '$image', style = '$style' WHERE id = $id")) {
        	$_SESSION['updated'] = $name;
        	header("location:aLodging.php");
        } else {
        	$_SESSION['error'] = 1;
        	header("location:aLodging.php");
        }
	}

	
?>