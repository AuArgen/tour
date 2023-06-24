<?php 
	session_start();
	require("./conn.php");
	$slider = $conn -> query("SELECT * FROM tour.slide ORDER BY id DESC");
	$social = $conn -> query("SELECT * FROM tour.social");
	$website = $conn -> query("SELECT * FROM tour.website");
	$videoInfo = $conn -> query("SELECT * FROM tour.videoinfo ORDER BY id DESC");


	$socialA = array();
	if (mysqli_num_rows($social)) {
		while ($r = mysqli_fetch_array($social)) {
			$socialA = array('whatsapp' => $r["whatsapp"],
							 'instagram' => $r["instagram"],
							 'tiktok' => $r["tiktok"], 
							 'phone' => $r["phone"]
							);
		}
	}

	$websiteA = array();
	if (mysqli_num_rows($social)) {
		while ($r = mysqli_fetch_array($website)) {
			$websiteA = array('name' => $r["name"],
							 'logo' => $r["logo"],
							 'info' => $r["info"] 
							);
		}
	}



?>