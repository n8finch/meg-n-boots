<?php
/**
 * Template part for hero images.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meg-n-Boots
 */

?>

<!-- Hero for Other Pages that aren't home -->
	<section id="posts-hero-section"  class="hero-page-toppers" data-type="background" data-speed="5">
		<article>
			<div class="container clearfix text-center">
				<h2 class="hero-section-title">
					<?php
					if ( is_404() ) {
						echo 'Aw shucks!';
					} else if ( is_search() ) {
						echo 'Just what you needed?';
					} else {
						echo the_title();
					}
					?>
				</h2>
			</div>
		</article>
	</section>


<!--Headers for every page except home page-->
	<div id="content" class="site-content">