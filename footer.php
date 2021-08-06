<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Classic
 */

?>

	<footer class="site-footer">

		<div class="site-info">
			<p>&copy; 2013-<?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?> </p>
			<p><a href="https://bluewaterbroadcasting.com/">Bluewater Broadcasting Co., LLC</a></p>
		</div><!-- .site-info -->

	</footer><!-- .site-footer -->

	<?php wp_footer(); ?>

</body>

</html>
