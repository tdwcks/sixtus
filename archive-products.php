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

<?php $activePage = "products"; ?>

<body class="products">
	<?php include 'includes/header.php';?>
	<article>
		<section class="title">
			<div class="col-6">
				<h1>Products</h1>
			</div>
		</section>
		<section class="title-band">
				<?php 
					$cats = array(); 
					$current = $_GET['category']; // Passed from Homepage
					if (!$current) {
				?>
					<a href="#" class="active category-title js-product-switch" data-category="all"><h5>Show All</h5></a>
				<?php
					} else {
				?>
					<a href="#" class="category-title js-product-switch" data-category="all"><h5>Show All</h5></a>
				<?php
					}
				?>
				
				<?php $args = array('post_type' => 'products', 'posts_per_page' => '-1');			 
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						$categories=get_the_category($post->id);
						foreach($categories as $category) { 
							array_push($cats, $category->term_id);
						}
				?>
				<?php endwhile;?>
				<?php 
					$cats = array_unique($cats); // remove duplicates
					// Loop through categories that have been used
					foreach($cats as $category) { 
						if ($category == $current) {
							$class = ' active';
						} else {
							$class = '';
						}
						echo '<a href="#" class="category-title js-product-switch '.$class.'" data-category="'.$category.'"><h5>'.get_cat_name($category).'</h5></a>';
					}
					wp_reset_query();
				?>
		</section>

		<section>
			<?php
				if (!$current) {
					$class = 'active';
				} else {
					$class = '';
				}
			?>
			<div class="product-cat discovery <?php echo $class; ?>" data-category="all">
			<?php			
						$args = array('post_type' => 'products', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => '-1');			 
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
			?>
					<div class="col-4">
				    	<a class="discovery-item" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<h3><?php the_title(); ?></h3>
						</a>
				    </div>
			<?php 
						endwhile;
						wp_reset_query();
			?>
			</div>





			<?php
				foreach($cats as $category) { 
					if ($category == $current) {
						$class = ' active';
					} else {
						$class = '';
					}
			?>
					<div class="product-cat discovery <?php echo $class; ?>"" data-category="<?php echo $category; ?>">
			<?php			
						$args = array('post_type' => 'products', 'category__in' => $category, 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => '-1' );			 
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
			?>
					<div class="col-4">
				    	<a class="discovery-item" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<h3><?php the_title(); ?></h3>
						</a>
				    </div>
			<?php
						endwhile;
			?>
					</div>
			<?php
				}
			?>

		</section>

	</article>
	<?php include 'includes/footer.php';?>	
<?php get_footer(); ?>

