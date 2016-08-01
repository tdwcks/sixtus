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

<body class="grid">
		<article class="grid-page">
			<div class="grid-container">
				<div class="row">
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-1"></div>
				</div> <!-- row -->
				<div class="row">
					<div class="col-2"></div>
					<div class="col-2"></div>
					<div class="col-2"></div>
					<div class="col-2"></div>
					<div class="col-2"></div>
					<div class="col-2"></div>
				</div> <!-- row -->
				<div class="row">
					<div class="col-3"></div>
					<div class="col-3"></div>
					<div class="col-3"></div>
					<div class="col-3"></div>
				</div> <!-- row -->
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4"></div>
					<div class="col-4"></div>
				</div> <!-- row -->
				<div class="row">
					<div class="col-6"></div>
					<div class="col-6"></div>
				</div> <!-- row -->
			</div> <!-- grid-container -->
		</article> <!-- typography-page -->
	<?php include 'includes/footer.php';?>
</body> <!-- typography -->
<?php get_footer(); ?>
