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

<?php 
	require("tours.php");
?>

<section class="tour">
	<h3>
		Videos about tours
	</h3>
	<div class="videoInfo">
		<div class="video">
			<iframe src="https://www.youtube.com/embed/fEuw4Hl04hU" title="LOST IN KYRGYZSTAN 4K" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
		<div class="info">
			<h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. 
			</h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
		</div>
	</div>
	<div class="videoInfo">
		<div class="info">
			<h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. 
			</h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
		</div>
		<div class="video">
			<iframe src="https://www.youtube.com/embed/fEuw4Hl04hU" title="LOST IN KYRGYZSTAN 4K" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</div>
</section>

<!-- End SEction -->

<section class="tour">
	<h3>
		Popular tours
	</h3>
	<div class="block1">
		<div class="img">
			<img src="./img/slide3.jpg">
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
			<img src="./img/slide4.jpg">
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
</section>