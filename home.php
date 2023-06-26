	<!-- Slideshow container -->
<main>
	<div class="slideshow-container">
	<?php 
		$dot = "";
		$sliderN = mysqli_num_rows($slider);
		if ($sliderN) {
			$count = 1;
			while ($r = mysqli_fetch_array($slider)) {
				$dot = $dot.'<span class="dot" onclick="currentSlide('.$count.')"></span>';
				echo '<div class="mySlides fade">
					    <div class="numbertext">'.$count++.' / '.$sliderN.'</div>
					    <img src="'.$r["img"].'" style="width:100%">
					    <div class="text">'.$r["text"].'</div>
					  </div>';
			}
		}
	?>

	  <!-- Next and previous buttons -->
	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
	  <?php echo $dot; ?>
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
	<?php 
		if (mysqli_num_rows($videoInfo)) {
			$counts = 0;
			while ($r = mysqli_fetch_array($videoInfo)) {
				$iframeE = '<div class="video"> '.$r["iframe"].'</div>';
				$infoE = '		<div class="info">
									<h3>
										'.$r["theme"].' 
									</h3>
									<span>'.$r["info"].'</span>
								</div>';
				echo '<div class="videoInfo">';
				if ($counts++ % 2 == 0) {
					echo $iframeE.''.$infoE;
				} else echo $infoE.''.$iframeE;
				echo '</div>';
			}
		}
	?>
	
</section>

<!-- End SEction -->

<section class="tour">
	<h3>
		Popular tours
	</h3>
		<?php 
		$tourPopular = $conn -> query("SELECT * FROM tour.tour WHERE popular=1");
	while ($r = mysqli_fetch_array($tourPopular)) {
		echo '
		<div class="'.$styleClassA[$r["style"]-1].'">
			<div class="img">
				<img src="'.$r["img"].'">
				<span class="price">
					$'.$r["price"].'
				</span>
			</div>
			<div class="info">
				<h3>'.$r["theme"].' </h3>
				<span>'.$r["info"].'</span>
				<p>
					<a href="read.php?id='.$r["id"].'&theme='.$r["theme"].'">
						Read more
					</a>
					
				</p>
			</div>	
		</div>

		';
	}
	?>
</section>