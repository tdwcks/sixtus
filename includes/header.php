<div class="grid-container">
<section class="top-bar">
	<ul>
		<li><a class="search js-search"></a></li>
		<li><a href="tel:+44 (0)1623 857102" class="call"><span class="mobile-hidden">01623 857102</span><span class="mobile-show">Call</span></a></li>
		<li><a href="mailto:enquiries@sixtus-group.com" class="email"><span class="mobile-hidden">enquiries@sixtus-group.com</span><span class="mobile-show">Email</span></a></li>
	</ul>
</section>
<header>
	<div class="col-4">
		<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sixtus_logo.svg" alt="Sixtus Logo"/></a>
	</div>
	<a class="js-hamburger shamburger"></a>
	<div class="col-8">
		<nav>
			<a class="js-hamburger-close close-icon"></a>
			<ul>
				<li><a <?php if ($activePage =="about") {?>
 class="active" <?php } ?>href="<?php bloginfo('url'); ?>/about">About</a></li>
				<li><a <?php if ($activePage =="products") {?>
 class="active" <?php } ?>href="<?php bloginfo('url'); ?>/products">Products</a></li>
				<li><a <?php if ($activePage =="service") {?>
 class="active" <?php } ?>href="<?php bloginfo('url'); ?>/service">Service</a></li>
				<li><a <?php if ($activePage =="training") {?>
 class="active" <?php } ?>href="<?php bloginfo('url'); ?>/training-consultancy">Training &amp; Consultancy</a></li>
				<li><a <?php if ($activePage =="contact") {?>
 class="active" <?php } ?> href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>
<section class="search-section">
	<div class="search-holder">
		<a class="exit-button js-exit"></a>
		<div class="col-6">

			<form class="search_bar" method="get">
			  <fieldset>
			    <input type="text" placeholder="Search" name="s" value="<?php the_search_query(); ?>" />
			  </fieldset>
			</form>

			<div class="search-results">
				<h3>Start typing...</h3>
			</div>
		</div>
	</div>
</section>