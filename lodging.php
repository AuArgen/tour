
<section class="tour">
	<h3>
		Our Lodging
	</h3>
		<?php 
	while ($r = mysqli_fetch_array($lodging)) {
		echo '
		<div class="'.$styleClassA[$r["style"]-1].'">
			<div class="img">
				<img src="'.$r["img"].'">
				<span class="price">
					$'.$r["price"].'
				</span>
			</div>
			<div class="info">
				<h3>'.$r["name"].' </h3>
				<span>'.$r["info"].'</span>
				<p>
					<a href="./?read='.$r["id"].'&type=3&theme='.$r["name"].'">
						Read more
					</a>
					
				</p>
			</div>	
		</div>

		';
	}
	?>

</section> 