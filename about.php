<section>
		<div class="about">
			<div class="aboutBlock">
				<h3>
					About us
				</h3>
				<?php 
					
						echo $aboutInfo;
					

				?>
			</div>
			<div class="aboutTours">
				<h3>
					Our best tours
				</h3>
				<?php 
					$tourBest = $conn->query("SELECT * FROM tour.tour WHERE best=1");
					while ($r = mysqli_fetch_array($tourBest)) {
						echo '
							<div class="block">
								<div class="img">
									<img src="'.$r["img"].'">
									<div class="info">
										<span>'.$r["theme"].'</span>
										<a href="./?read='.$r["id"].'&type=1&theme='.$r["theme"].'">Read more</a>
									</div>
								</div>
							</div>
						';
					}
				?>
				
				
			</div>
		</div>
</section>