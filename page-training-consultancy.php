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
<?php $activePage = "training"; ?>
<body class="training-consultancy">
	<?php include 'includes/header.php';?>
		<article="page-training-consultancy">
			<section class="title">
				<div class="col-6">
					<h1><?php the_title(); ?></h1>
				</div>
			</section>
			<section class="subtitle">
				<div class="col-6">
					<h3>In response to the evolving worldwide threat environment, we have expanded our services to deliver customized threat focused, end-to-end (CBRN) security solutions.</h3>
				</div>
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/consultation_sub.png">
				</div>
			</section>
			<section class="writing-image">
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/conference_image.jpg">
				</div>
				<div class="col-6">
					<p class="large">Underpinned by expert analysis and operational experience, our Consultancy and Training Services deliver tailored threat analysis, pre-incident planning and incident response support, right through to the restoration of normal business.</p>
				</div>
			</section>
			<section class="writing-image">
				<div class="col-6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/consultation_1.jpg">
				</div>
				<div class="col-6">
					<p class="large">Protecting people, assets and reputation is at the heart of our offering, minimizing the crisis period with its associated risk, uncertainty and expense.</p>
				</div>
			</section>
			<section class="call-to-action">
				<a class="link-btn-one" href="<?php echo get_site_url(); ?>/contact">Get In Touch</a>
			</section>
		</article>  <!-- page-training-consultancy -->
	<?php include 'includes/footer.php';?>
</body> <!-- training-consultancy -->
<?php get_footer(); ?>
