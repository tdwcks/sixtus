<?php
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

$query_string = 's='.$_REQUEST['search'];
$the_query = new WP_Query($query_string);
relevanssi_do_query($the_query);

if ( $the_query->have_posts() ) :
?>
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a class="search-result" href="<?php echo get_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </a>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php endif; ?>