<?php
/**
 * Template part for displaying posts on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

?>

<article class="slide" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail('medium'); ?>
		    </a>
		<?php endif; ?>
		<?php 
			
			the_title( '<h2 class="entry-title entry-title-bxcarousel"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			the_content();
		?>
		<p class="entry-price-archive">
			<span class="price-label-archive">
				<?php _e('Цена за метр:'); ?>
			</span>
			<?php the_field('price'); ?>
			<?php _e('руб.'); ?>
		</p>
</article><!-- #post-## -->
