
<section class="tour">
	<h3>
		Best location
	</h3>

		<?php 
	while ($r = mysqli_fetch_array($location)) {
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
					<a href="./?read='.$r["id"].'&type=2&theme='.$r["theme"].'">
						Read more
					</a>
					
				</p>
			</div>	
		</div>

		';
	}
	?>


</section> 