<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
		<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
		<script src="javascript/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
		<script>
				if ($(window).width() < 1025) {
			    	var swiper = new Swiper('.swiper-container', {
					        nextButton: '.swiper-button-next',
		        			prevButton: '.swiper-button-prev',
					        loop: true
					    });					}
					else {
						var swiper = new Swiper('.swiper-container', {
					        nextButton: '.swiper-button-next',
		        			prevButton: '.swiper-button-prev',
					        loop: true,
					        direction: 'vertical'
					    });
					}
			    
		</script>
	</div>
</html>
