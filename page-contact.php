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

<?php $activePage = "contact"; ?>

<body class="contact">
	<?php include 'includes/header.php';?>
		<article="page-contact">
			<section class="title">
				<div class="col-6">
					<h1><?php the_title(); ?></h1>
				</div>
			</section>
			<section class="contact-form">
				<div class="col-6 orange">
					<h4>IF YOU HAVE ANY QUESTIONS OR WOULD LIKE TO SET UP A MEETING, PLEASE CONTACT US ON THE following DETAILS, OR FILL OUT THE FORM AND WE WILL GET BACK TO YOU AS SOON AS POSSIBLE.</h4>
					<a href="tel:+44 (0)1623 857102" class="contact-button telephone">+44 (0)1623 857102</a>
					<a href="mailto:info@sixtus-group.com" class="contact-button email">info@sixtus-group.com</a>
				</div>
				<div class="col-6 form">
					<?php echo do_shortcode('[contact-form-7 id="66" title="Sixtus Contact"]') ?>
				</div>
			</section>
			<section class="contact-picture">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact_image.jpg">
			</section>
		</article>  <!-- page-contact -->
	<?php include 'includes/footer.php';?>
</body> <!-- contact -->
<?php get_footer(); ?>
