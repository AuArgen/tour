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
        	$_SESSION['updated'] = 1;
        	header("location:admin.php");
        }
	}
	
?>