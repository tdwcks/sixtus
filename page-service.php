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

<?php $activePage = "service"; ?>

<body class="service">
	<?php include 'includes/header.php';?>
		<article="page-service">
			<section class="title">
				<div class="col-6">
					<h1><?php the_title(); ?></h1>
				</div>
			</section>
			<section class="subtitle">
				<div class="col-6">
					<h3>service is at the centre of what we offer here at sixtus.</h3>
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.periam, eaque ipsa quae ab illo inventore veritatis et quasi.</h3>
				</div>
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/rotating.gif">
				</div>
			</section>
			<section class="writing-image">
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/service_van.png">
				</div>
				<div class="col-6">
					<p class="large">Sixtus, meaning 'polished', pride theirselves on efficiency, product quality and quality of service.</p>
					<p class="large">Our experienced, dedicated sales and service team are on hand 24 hours a day to ensure the procurement and aftersales experience replicates the precision, professionalism and dedication of the organisation using our World-Class products on the front-line.</p>
				</div>
			</section>
			<section class="call-to-action">
				<a class="link-btn-one" href="<?php echo get_site_url(); ?>/contact">Get In Touch</a>
			</section>
		</article>  <!-- page-about -->
	<?php include 'includes/footer.php';?>
</body> <!-- about -->
<?php get_footer(); ?>
