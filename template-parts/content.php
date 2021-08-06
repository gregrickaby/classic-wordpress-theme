<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Classic
 */

?>

	<article <?php post_class( 'post-container' ); ?>>

		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) :
				?>
					<div class="entry-meta">
						<time class="posted-on" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo esc_html( get_the_date( 'l F j, Y @ g:i a' ) ); ?></time>
					</div><!-- .entry-meta -->
					<?php
				endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. */
							esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'classic' ),
							[
								'span' => [
									'class' => [],
								],
							]
						),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					)
				);

				wp_link_pages(
					[
						'before' => '<div class="page-links">' . esc_attr__( 'Pages:', 'classic' ),
						'after'  => '</div>',
					]
				);
				?>
							<div class="seperator">
				<span>&middot;</span> <span>&middot;</span> <span>&middot;</span>
			</div>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php

			the_post_navigation(
				[
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( '❮ Previous Post', 'classic' ) . '</span> ',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post ❯', 'classic' ) . '</span>',
				]
			);

			if ( comments_open() || get_comments_number() ) :
				comments_template();
						endif;
			?>

		</footer>

	</article><!-- .post-container -->
