<?php
/**
 * Template part for displaying posts on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-bgblock-benefits'); ?>>

		<?php 
			
			global $post; 
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1280,853 ), false, '' );
			
			if (!empty($src)) { ?>
			<div class="post_thumb post_thumb-bgblock post_thumb-bgblock-benefits clearfix" style="background: linear-gradient(rgba(30,30,0,0), rgba(0,0,0,0)), url(<?php echo $src[0]; ?> ) top / cover fixed no-repeat;">
		<?php
			// the_title( '<h2 class="entry-title entry-title-bgblock-benefits">', '</h2>' );
		
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stainless' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		?>
		</div>
			<?php } else {} ?>
<!-- 		<div class="blur-wrap blur-wrap-benefits">
			
			<img src="<?php echo $src[0]; ?>" alt="">
		</div> -->
		<div class="blur-wrap blur-wrap-benefits blur-wrap-2">
			<!-- <img src="<?php echo $src[0]; ?>" alt=""> -->
			<img src="<?php echo get_template_directory_uri(); ?>/img/2.jpeg" alt="">
		</div>
		<div class="blur-wrap blur-wrap-benefits blur-wrap-2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/2.jpeg" alt="">
		</div>
		<div class="blur-wrap blur-wrap-benefits blur-wrap-2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/2.jpeg" alt="">
		</div>
</article><!-- #post-## -->