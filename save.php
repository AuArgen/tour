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

        if ($conn -> query("INSERT INTO slide(text,img) VALUES('$text','$image')")) {
        	$_SESSION['adding'] = 1;
        	header("location:admin.php");
        }
	}
	
?>