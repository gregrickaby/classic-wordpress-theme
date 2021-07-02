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

		<div class="container site-info">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></p>
		</div><!-- .container .site-info -->

	</footer><!-- .site-footer -->

	<?php wp_footer(); ?>

</body>

</html>
