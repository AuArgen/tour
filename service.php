<?php 
	session_start();
	require("./conn.php");
	$slider = $conn -> query("SELECT * FROM tour.slide ORDER BY id DESC");
	$social = $conn -> query("SELECT * FROM tour.social");
	$website = $conn -> query("SELECT * FROM tour.website");
	$videoInfo = $conn -> query("SELECT * FROM tour.videoinfo ORDER BY id DESC");
	$tour = $conn -> query("SELECT * FROM tour.tour ORDER BY id DESC");
	$location = $conn -> query("SELECT * FROM tour.location ORDER BY id DESC");
	$lodging = $conn -> query("SELECT * FROM tour.lodging ORDER BY id DESC");
	$contact = $conn -> query("SELECT * FROM tour.contact ORDER BY id DESC");
	$team = $conn -> query("SELECT * FROM tour.team ORDER BY id DESC");
	$contactcountr = $conn -> query("SELECT id FROM tour.contact WHERE 'show'=0");
	$contactcount =  mysqli_num_rows($contactcountr);
	$about = $conn -> query("SELECT * FROM tour.about");

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
	$aboutInfo = "Enter about information...";
	if (mysqli_num_rows($about)) {
		while ($r = mysqli_fetch_array($about)) {
			$aboutInfo = $r["info"];
		}
	}

	$styleClassA = ["block1","block2","block3"];
	$styleClassWordA = ["One row", "Two row", "Three row"];


?>