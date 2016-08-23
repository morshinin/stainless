<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<figure class="entry-thumbnail">
			<?php if (has_post_thumbnail()) {
				the_post_thumbnail();
			} ?>
		</figure>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stainless' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stainless' ),
				'after'  => '</div>',
			) );*/
		?>
	</div><!-- .entry-content -->
	<aside class="entry-aside">
		<div class="entry-aside_content">
			<?php the_field('tech'); ?>
			<p class="entry-price">
				<span class="price-label">
					<?php _e('Цена за метр:'); ?>
				</span>
				<?php the_field('price'); ?>
				<?php _e('руб.'); ?>
			</p>
			<a href="#" class="button button-single eModal-1">
				<?php _e('Оформить заявку'); ?>
			</a>
			<p>
				<strong>
					<?php _e('Срок монтажа:'); ?>
				</strong>
				<?php _e('от 3-х дней'); ?>
			</p>
			<p>
				<strong>
					<?php _e('Стоимость указана:'); ?>
				</strong>
				<?php _e('с учетом доставки и установки'); ?>
			</p>
		</div>	<!-- .entry-aside_content -->
	</aside>	<!-- .entry-aside -->

	<footer class="entry-footer">
		<?php stainless_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
