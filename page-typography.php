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

<body class="typography">
	<?php include 'includes/header.php';?>
		<article class="typography-page">
			<div class="grid-container">
				<div class="col-3"><div class="grid-spacer"></div></div>
				<div class="col-6">
					<h1 class="orange">TT Type</h1>
					<h2>A shining light for police operations.</h2>
					<h3>Sixtus Group are one of the UK's leading organisations for the supply and service of specialist security, military and safety products. we’re here to make a safer world.</h3>
					<h4>The first responders choice</h4>
					<p class="large">Sixtus, meaning 'polished', pride theirselves on efficiency, product quality and quality of service.</p>
					<h5 class="orange">Blueblocker Outside</h5>
					<p>The Avon C50 protective mask is based on the U.S. M50/JSGPM (Joint Services General Purpose Mask) and sharing key technologies, provides maximum operational flexibility to counter multiple threat scenarios, including chemical, biological, nuclear and radiological (CBRN) agents, Toxic Industrial Chemicals (TICs), and Toxic Industrial Materials (TIMs).</p>
					<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
				</div> <!-- col-6 -->
			</div> <!-- grid-container -->
		</article> <!-- typography-page -->
	<?php include 'includes/footer.php';?>
</body> <!-- typography -->
<?php get_footer(); ?>
