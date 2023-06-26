<section>
		<div class="about">
			<div class="aboutBlock">
				<h3>
					<?php echo $_GET['theme']; ?>
				</h3>
				<?php 
					$id = $_GET["read"];
					$type = $_GET["type"];
					$r = $conn -> query("SELECT * FROM tour.moreinfo WHERE id_cate=$id and type=$type");
					while ($row = mysqli_fetch_array($r)) {
						echo $row["info"];
					}
					

				?>
			</div>
			<div class="aboutTours">
				<h3>
					Our lodging
				</h3>
				<?php 
					$tourBest = $conn->query("SELECT * FROM tour.lodging");
					while ($r = mysqli_fetch_array($tourBest)) {
						echo '
							<div class="block">
								<div class="img">
									<img src="'.$r["img"].'">
									<div class="info">
										<span>'.$r["name"].'</span>
										<a href="./?read='.$r["id"].'&type=3&theme='.$r["name"].'">Read more</a>
									</div>
								</div>
							</div>
						';
					}
				?>
				
				
			</div>
		</div>
</section>