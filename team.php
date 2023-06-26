<section>
	<h3>
		Our team
	</h3>
	 <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php 
                    while ($r = mysqli_fetch_array($team)) {
                        echo '
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="'.$r["img"].'" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">'.$r["name"].'</h2>
                            <p class="description">'.$r["description"].'</p>
                            
                            <div class="buttons" style="display: flex; justify-content: space-between;">
                                <button class="button">
                                <a href="'.$r["facebook"].'">
                                    <i class="fab fa-facebook" style="color:white; font-size: 1.4rem;"></i>
                                </a>
                                </button>
                                <button class="button">
                                    <a href="https://wa.me/'.$r["whatsapp"].'">
                                        <i class="fab fa-whatsapp" style="color:white; font-size: 1.4rem;"></i>
                                    </a>
                                </button>
                                <button class="button">
                                    <a href="'.$r["instagram"].'">
                                        <i class="fab fa-instagram" style="color:white; font-size: 1.4rem;"></i>
                                    </a>
                                </button>
                            </div>
                            

                        </div>
                    </div>
                    

                        ';
                    }
                    ?>
                    
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
</section>