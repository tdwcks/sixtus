<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<body class="products">
	<?php include 'includes/header.php';?>
	<article>
		<section class="title">
			<div class="col-6">
				<h1>Products</h1>
			</div>
		</section>
		<section class="title-band">
			<?php wp_nav_menu( array( 'theme_location' => 'product-menu' ) ); ?>
		</section>
		<section class="discovery">
			<?php $query = new WP_Query(array('post_type' => 'products'));
			while ($query->have_posts()) {
			    $query->the_post(); ?>
			    <div class="col-4">
			    	<a class="discovery-item" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(); ?></h3>
					</a><!-- discovery-item -->
			    </div>
			  <?php } wp_reset_query(); ?>
		</section>
	</article>
	<?php include 'includes/footer.php';?>	
<?php get_footer(); ?>
