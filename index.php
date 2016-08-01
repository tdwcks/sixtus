<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php $activePage = "home"; ?>
<body class="home">
	<?php include 'includes/header.php';?>
		<article="page-home">
			<section class="hero">
				<div class="swiper-container">
			        <div class="swiper-wrapper">
			        	<?php $args = array('post_type' => 'slides' );			 
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="swiper-slide">
					            	<div class="col-4">
					            		<h1 class="orange"><?php the_title(); ?></h1>
					            		<?php if( get_field('tag-line') ): ?>
											<h3 class="white"><?php the_field('tag-line'); ?></h3>
										<?php endif; ?>
					            		<a href="<?php the_field('link'); ?>" class="link-btn-one">Find Out More</a>
					            	</div> <!-- col-4 -->
					            	<img src="<?php the_post_thumbnail_url(); ?>">
					            </div> <!-- swiper-slide -->
						<?php endwhile;?>
			        </div> <!-- swiper-wrapper -->
			        <div class="swiper-button-next"></div>
        			<div class="swiper-button-prev"></div>
			    </div> <!-- swiper-container -->
			</section> <!-- hero -->
			<section class="discovery">
				<div class="col-4">
					<a class="discovery-item" href="/products?category=6">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/military.jpg">
						<h3>Military</h3>
					</a> <!-- discovery-item -->
				</div> <!-- col-4 -->
				<div class="col-4">
					<a class="discovery-item" href="/products?category=8">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/industrial.jpg">
						<h3>Industrial</h3>
					</a> <!-- discovery-item -->
				</div> <!-- col-4 -->
				<div class="col-4">
					<a class="discovery-item" href="/products?category=7">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/law_enforcement.jpg">
						<h3>Law Enforcement</h3>
					</a> <!-- discovery-item -->
				</div> <!-- col-4 -->
			</section> <!-- discovery -->
		</article>  <!-- page-home -->
	<?php include 'includes/footer.php';?>
</body> <!-- home -->
<?php get_footer(); ?>
