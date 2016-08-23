<?php
/**
 * Template part for displaying posts on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('workscheme'); ?>>

		<?php 
			 if (has_post_thumbnail()) {
						the_post_thumbnail('thumbnail');
					} 
			the_title( '<h2 class="entry-title entry-title-benefits">','</h2>' );
		
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stainless' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		?>
</article><!-- #post-## -->
