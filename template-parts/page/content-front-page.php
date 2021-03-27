<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<div class="panel-content">
		<div class="wrap">
			<div class="entry-content">
				<?php
					the_content(
						sprintf(
							/* translators: %s: Post title. */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
							get_the_title()
						)
					);
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
							'after'  => '</div>',
						)
					);
					?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-<?php the_ID(); ?> -->
