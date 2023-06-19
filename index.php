<?php 

	$title = "Home page";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megaline ноутбуки  года купить —  купить по низкой цене на Megaline Маркете <?php echo $infoMeta; ?> ">
    <meta name="description" content="Купить samsung, lenovo, asus, mac book ноутбуки 2020 года купить - 156 предложений - низкие цены, экспресс-доставка от 1-2 часов, возможность оплаты в рассрочку для части товаров, кешбэк <?php echo $infoMeta; ?> ">
    <title><?php echo $title;?></title>
    <link href="./img/logo.webp" rel="icon" type="image/x-png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
   
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
		<div class="headerTop">
			<div class="sosial">
				<a href="" class="whatsapp" title = "Whatsapp link">
					<i class="fab fa-whatsapp"></i>
				</a>
				<a href="" class="instagram" title = "Instagram page">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="tel:+996703421521" class="phone" title = "Phone number">
					<i class="fas fa-phone"></i>
				</a>
				
				<a href="" class="tiktok" title = "Tiktok page">
					<i class="fab fa-tiktok"></i>
				</a>
			</div>
			
		
		</div>
		<div class="header">
			<div class="logo">
				<a href="./">
					<img src="./img/logo.webp">
				</a>
			</div>
			<a href="" class="pageActive">
				Home
			</a>
			<a href="">Contact</a>
			<a href="">Contact</a>
			<a href="">Contact</a>
			<a href="">About</a>
		</div>
	</header>
	<!-- Slideshow container -->
<main>
	<div class="slideshow-container">

	  <!-- Full-width images with number and caption text -->
	  <div class="mySlides fade">
	    <div class="numbertext">1 / 4</div>
	    <img src="./img/slide1.jpg" style="width:100%">
	    <div class="text">Caption Text</div>
	  </div>

	  <div class="mySlides fade">
	    <div class="numbertext">2 / 4</div>
	    <img src="./img/slide2.jpg" style="width:100%">
	    <div class="text">Caption Two</div>
	  </div>

	  <div class="mySlides fade">
	    <div class="numbertext">3 / 4</div>
	    <img src="./img/slide3.jpg" style="width:100%">
	    <div class="text">Caption Three</div>
	  </div>
	   <div class="mySlides fade">
	    <div class="numbertext">4 / 4</div>
	    <img src="./img/slide4.jpg" style="width:100%">
	    <div class="text">Caption Text</div>
	  </div>

	  <!-- Next and previous buttons -->
	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span>
	</div>
	<script type="text/javascript">
		let slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  let i;
		  let slides = document.getElementsByClassName("mySlides");
		  let dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		}
	</script>
</main>


<section class="tour">
	<h2>
		<center>Our tours</center>
	</h2>
	<div class="block1">
		<div class="img">
			<img src="./img/slide1.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block1">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>






	<div class="block2">
		<div class="img">
			<img src="./img/slide1.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. </span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block2">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block2">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block2">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>




	<div class="block3">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block3">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block3">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>
	<div class="block3">
		<div class="img">
			<img src="./img/slide2.jpg">
		</div>
		<div class="info">
			<h3>Lorem ipsum dolor sit amet </h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. 
			consequat.</span>
			<p>
				<a href="read.php">
					Read more
				</a>
				<span>
					13.06.2023, 16:00
				</span>
			</p>
		</div>	
	</div>


</section>


</body>
</html>