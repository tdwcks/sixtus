<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article>
	<section class="title">
		<div class="col-6">
			<h1>Products</h1>
		</div>
	</section>
	<section class="title-band">
	
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
