<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form class="search_bar" method="get">
  <fieldset>
    <input type="text" placeholder="Search" name="s" value="<?php the_search_query(); ?>" />
    <input id="submit" name="submit" type="submit" value="" />
  </fieldset>
</form>