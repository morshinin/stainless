<?php
/**
 * Template part for displaying posts on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

?>

<article class="service" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php 
			the_post_thumbnail('thumbnail');
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		

		?>
</article><!-- #post-## -->
