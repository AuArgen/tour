<?php 
	require("./service.php");

	$title = "Home page";
	$listPage = ["home","tours","location","lodging","contact","about"];
	$listName = ["Home", "Our tours", "Best Location","Our Lodging","Contact", "About"];
	$listTitle = ["Home Page" , "Our Tours",  "Best Location ","Lodging", "Contact" , "About Us"];
	$page = $listPage[0];
	$title = $listTitle[0];
	$activePage = 0;
	for ($i=0; $i < sizeof($listPage) ; $i++) { 
		if (isset($_GET[$listPage[$i]])) {
			$title = $listTitle[$i];
			$page = $listPage[$i];
			$activePage = $i;
		}	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $infoMeta; ?> ">
    <meta name="description" content=" <?php echo $infoMeta; ?> ">
    <title> <?php echo $websiteA["name"]; ?>, <?php echo $title;?></title>
    <link href="<?php echo $websiteA["logo"]; ?>" rel="icon" type="image/x-png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  	<link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
	<script src="js/swiper-bundle.min.js"></script>
</head>
<body>
	<header>
		<div class="headerTop">
			<div class="sosial">
				<a href="https://wa.me/<?php echo $socialA["whatsapp"]; ?>" class="whatsapp" title = "Whatsapp link">
					<i class="fab fa-whatsapp"></i>
				</a>
				<a href="<?php echo $socialA["instagram"]; ?>" class="instagram" title = "Instagram page">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="tel:<?php echo $socialA["phone"]; ?>" class="phone" title = "Phone number">
					<i class="fas fa-phone"></i>
				</a>
				
				<a href="<?php echo $socialA["tiktok"]; ?>" class="tiktok" title = "Tiktok page">
					<i class="fab fa-tiktok"></i>
				</a>
			</div>
			
		
		</div>
		<div class="header">
			<div class="logo">
				<a href="./">
					<img src="<?php echo $websiteA["logo"]; ?>">
				</a>
			</div>
			<div class="menu">	
				<span class="closeMenu" onclick="menu()"> &times; </span>
			<?php 
				for ($i=0; $i < sizeof($listPage); $i++) { 
					if ($i == $activePage) {
						echo '<a href="?'.$listPage[$i].'" class="pageActive">'.$listName[$i].'</a>';
					} else echo '<a href="?'.$listPage[$i].'" class="">'.$listName[$i].'</a>';
				}
			?>
			</div>
			<button onclick="menu()">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</header>
<?php 
	if (isset($_GET["read"])) {
		require("read.php");
	} else {
		require($page.".php");
	}
	require("footer.php");
?>
<script>
	function menu() {
		document.querySelector(".menu").classList.toggle("menuActive")
		document.querySelector(".closeMenu").classList.toggle("closeMenuActive")
		document.querySelector(".fa-bars").classList.toggle("fa-barsNone")
	}
	function sosial() {
		// alert()
		let sos = 0
		let sosArray = [".whatsapp",".instagram",".phone",".tiktok","tiktok"] 
		function scaleSos() {
			if (document.querySelector(".sosActive")) {
				document.querySelector(".sosActive").classList.toggle("sosActive")
			}
			document.querySelector(`.sosial ${sosArray[sos++]}`).classList.toggle("sosActive")
			if (sos < sosArray.length - 1) {
				let scaleTime = setTimeout(scaleSos, 1500);
			}
		}
		scaleSos()
		let sosialTime = setTimeout(sosial,10000);
	}
	sosial()
</script>
</body>
</html>