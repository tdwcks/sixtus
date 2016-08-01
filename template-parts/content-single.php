<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article class="products-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="product-context">
		<?php if( get_field('context-image') ): ?>
			<img src="<?php the_field('context-image'); ?>" />
		<?php endif; ?>
	</section><!-- product-context -->
	<section class="title-band">
		<a class="no-underline" href="<?php echo get_site_url(); ?>/products"><h5>Products</h5></a>
		<h5 class="orange">></h5>
		<?php the_title( '<h5>', '</h5>' ); ?>
	</section>
	<section class="product-main">
		<div class="col-6">
			<?php the_title( '<h1 class="orange">', '</h1>' ); ?>
			<?php if( get_field('tag-line') ): ?>
				<h3><?php the_field('tag-line'); ?></h3>
			<?php endif; ?>
			<p class="large"><?php the_content(); ?></p>
			<?php if( get_field('technical-specification') ): ?>
				<a class="link-btn-one" href="<?php the_field('technical-specification'); ?>" >Download Technical Spec</a>
			<?php endif; ?>
		</div>
		<div class="col-6">
			<?php if( get_field('product-image') ): ?>
				<img src="<?php the_field('product-image'); ?>" />
			<?php endif; ?>
		</div>
	</section>
	<section class="title-band">
		<h4>Features &amp; Benefits</h4>
	</section>
	<section class="mobile-content-switcher">
		<div class="mobile-content-item">
			<?php if( get_field('benefit-one') ): ?>
				<div class="mobile-topline js-mobile-benefit-switch active" data-benefit="one">
					<h5><?php the_field('benefit-one'); ?></h5>
				</div>
			<?php endif; ?>
			<div class="mobile-below active" data-benefit="one">
				<ul class="benefit-list">
					<?php if( have_rows('benefit-one-list') ): ?>
					<?php while( have_rows('benefit-one-list') ): the_row(); ?>
						<li><h4><?php the_sub_field('benefit-one-item'); ?></h4></li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="mobile-content-item">
			<?php if( get_field('benefit-two') ): ?>
				<div class="mobile-topline js-mobile-benefit-switch" data-benefit="two">
					<h5><?php the_field('benefit-two'); ?></h5>
				</div>
			<?php endif; ?>
			<div class="mobile-below" data-benefit="two">
				<ul class="benefit-list">
					<?php if( have_rows('benefit-two-list') ): ?>
					<?php while( have_rows('benefit-two-list') ): the_row(); ?>
						<li><h4><?php the_sub_field('benefit-two-item'); ?></h4></li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="mobile-content-item">
			<?php if( get_field('benefit-three') ): ?>
				<div class="mobile-topline js-mobile-benefit-switch" data-benefit="three">
					<h5><?php the_field('benefit-three'); ?></h5>
				</div>
			<?php endif; ?>
			<div class="mobile-below" data-benefit="three">
				<ul class="benefit-list">
					<?php if( have_rows('benefit-three-list') ): ?>
					<?php while( have_rows('benefit-three-list') ): the_row(); ?>
						<li><h4><?php the_sub_field('benefit-three-item'); ?></h4></li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="mobile-content-item">
			<?php if( get_field('benefit-four') ): ?>
				<div class="mobile-topline js-mobile-benefit-switch" data-benefit="four">
					<h5><?php the_field('benefit-four'); ?></h5>
				</div>
			<?php endif; ?>
			<div class="mobile-below" data-benefit="four">
				<ul class="benefit-list">
					<?php if( have_rows('benefit-four-list') ): ?>
					<?php while( have_rows('benefit-four-list') ): the_row(); ?>
						<li><h4><?php the_sub_field('benefit-four-item'); ?></h4></li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<section class="content-switcher">
		<div class="switcher-holder">
			<ul class="switcher-menu">
				<?php if( get_field('benefit-one') ): ?>
					<li class="js-benefit-switch active" data-benefit="one"><h5><?php the_field('benefit-one'); ?></h5></li>
				<?php endif; ?>
				<?php if( get_field('benefit-two') ): ?>
					<li class="js-benefit-switch" data-benefit="two"><h5><?php the_field('benefit-two'); ?></h5></li>
				<?php endif; ?>
				<?php if( get_field('benefit-three') ): ?>
					<li class="js-benefit-switch" data-benefit="three"><h5><?php the_field('benefit-three'); ?></h5></li>
				<?php endif; ?>
				<?php if( get_field('benefit-four') ): ?>
					<li class="js-benefit-switch" data-benefit="four"><h5><?php the_field('benefit-four'); ?></h5></li>
				<?php endif; ?>
			</ul>
			<?php if( get_field('benefit-one') ): ?>
				<div class="switch-content active" data-benefit="one">
					<ul class="benefit-list">
						<?php if( have_rows('benefit-one-list') ): ?>
							<?php while( have_rows('benefit-one-list') ): the_row(); ?>
								<li><h4><?php the_sub_field('benefit-one-item'); ?></h4></li>
							<?php endwhile; ?>
					</ul>
					<?php if( get_field('benefit-one-image') ): ?>
						<img src="<?php the_field('benefit-one-image'); ?>" />
					<?php endif; ?>
				<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if( get_field('benefit-two') ): ?>
				<div class="switch-content" data-benefit="two">
					<ul class="benefit-list">
						<?php if( have_rows('benefit-two-list') ): ?>
							<?php while( have_rows('benefit-two-list') ): the_row(); ?>
								<li><h4><?php the_sub_field('benefit-two-item'); ?></h4></li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php if( get_field('benefit-two-image') ): ?>
						<img src="<?php the_field('benefit-two-image'); ?>" />
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if( get_field('benefit-three') ): ?>
				<div class="switch-content" data-benefit="three">
					<ul class="benefit-list">
						<?php if( have_rows('benefit-three-list') ): ?>
							<?php while( have_rows('benefit-three-list') ): the_row(); ?>
								<li><h4><?php the_sub_field('benefit-three-item'); ?></h4></li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php if( get_field('benefit-three-image') ): ?>
						<img src="<?php the_field('benefit-three-image'); ?>" />
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if( get_field('benefit-four') ): ?>
				<div class="switch-content" data-benefit="four">
					<ul class="benefit-list">
						<?php if( have_rows('benefit-four-list') ): ?>
							<?php while( have_rows('benefit-four-list') ): the_row(); ?>
								<li><h4><?php the_sub_field('benefit-four-item'); ?></h4></li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php if( get_field('benefit-four-image') ): ?>
						<img src="<?php the_field('benefit-four-image'); ?>" />
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<section class="title-band accesories">
		<h4>Accessories</h4>
	</section>
	<section class="content-switcher accesories">
		<div class="accesories-holder">
			<?php $slug = $post->post_name; ?>
			<?php $accessories_cats = array(); ?>

			<a href="#" class="active category-title js-accessories-switch" data-category="all">Show All</a>

			<?php $args = array('post_type' => 'accessories', 'tag' => $slug );			 
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					$categories=get_the_category($post->id);
					foreach($categories as $category) { 
						array_push($accessories_cats, $category->term_id);
					}
			?>
				<?php endwhile;?>

			<?php 
				$accessories_cats = array_unique($accessories_cats); // remove duplicates
				// Loop through categories that have been used
				foreach($accessories_cats as $category) { 
					echo '<a href="#" class="category-title js-accessories-switch" data-category="'.$category.'">'.get_cat_name($category).'</a>';
				}
			?>

			<div class="accesories-cat" data-category="all">
				<?php			
							$args = array('post_type' => 'accessories', 'tag' => $slug);			 
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
				?>

							<div class="col-3">
								<?php the_post_thumbnail(); ?>
								<h5 class="orange"><?php the_title(); ?></h5>
								<?php the_content(); ?>
							</div>
				<?php 
							endwhile;
				?>
			</div>

			<?php
				foreach($accessories_cats as $category) { 
			?>
					<div class="accesories-cat" data-category="<?php echo $category; ?>">

			<?php			
						$args = array('post_type' => 'accessories', 'tag' => $slug, 'category__in' => $category );			 
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
			?>

						<div class="col-3">
							<?php the_post_thumbnail(); ?>
							<h5 class="orange"><?php the_title(); ?></h5>
							<?php the_content(); ?>
						</div>
			<?php 
						endwhile;
			?>
					</div>
			<?php
				}
			?>


		</div>
	</section>
	<section class="call-to-action">
		<a class="link-btn-one" href="<?php echo get_site_url(); ?>/contact">Get In Touch</a>
	</section>
</article><!-- #post-## -->
