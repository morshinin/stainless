<?php
/**
 * Template part for displaying posts on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

?>

<article class="archive-entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail(); ?>
		    </a>
		<?php endif; ?>
		<?php 
			
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Далее %s <span class="meta-nav">&rarr;</span>', 'stainless' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		?>
		<p class="entry-price-archive">
			<span class="price-label-archive">
				<?php _e('Цена за метр:'); ?>
			</span>
			<?php the_field('price'); ?>
			<?php _e('руб.'); ?>
		</p>
		<!-- <a href="#" class="button button-archive eModal-1">
				<?php _e('Оформить заявку'); ?>
			</a> -->
</article><!-- #post-## -->
