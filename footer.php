<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meg-n-Boots
 */

?>

	</div><!-- #content -->
	</div><!-- #page -->
	</div><!-- .container -->
	<div class="container">

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'meg-n-boots' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'meg-n-boots' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'meg-n-boots' ), 'meg-n-boots', '<a href="http://www.n8finch.com" rel="designer">Nate Finch</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- #container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
