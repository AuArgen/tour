
<?php 

	require("team.php");
 ?>
<script>
		let iframes = document.querySelectorAll(".video iframe");
		for (var i = 0; i < iframes.length; i++) {
			iframes[i].style="width:100%; height:240px";
		}
		var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
</script>

<footer>
	<h3>
		comapyLLC to UP ourteam@gamil.com/ 2023
	</h3>
</footer>


