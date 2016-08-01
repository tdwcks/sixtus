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
<?php $activePage = "about"; ?>
<body class="about">
	<?php include 'includes/header.php';?>
		<article="page-about">
			<section class="title">
				<div class="col-6">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="col-6">
					
				</div>
			</section>
			<section class="subtitle">
				<div class="col-6">
					<h3>Sixtus Group are one of the UK's leading organisations for the supply and service of specialist security, military and safety products. we’re here to make a safer world.</h3>
				</div>
			</section>
			<section class="writing-image">
				<div class="col-6">
					<p class="large">Sixtus, meaning 'polished', pride theirselves on efficiency, product quality and quality of service.</p>
					<p class="large">Our experienced, dedicated sales and service team are on hand 24 hours a day to ensure the procurement and aftersales experience replicates the precision, professionalism and dedication of the organisation using our World-Class products on the front-line.</p>
				</div>
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about_van.jpg">
				</div>
			</section>
			<section class="writing-image">
				<div class="col-6">
					<p class="large">All products offered are manufactured and supplied over, above and in accordance with the latest ISO9001 Quality Standards, with product quality at the nucleus of Sixtus Group's DNA.</p>
					<img class="bsi-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/bsi_logo.png">
				</div>
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about_service.jpg">
				</div>
			</section>
		</article>  <!-- page-about -->
	<?php include 'includes/footer.php';?>
</body> <!-- about -->
<?php get_footer(); ?>
