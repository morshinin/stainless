<?php
/**
 * The home template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stainless
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $block1_home = new WP_Query('category_name=1block-home&posts_per_page=1');
			while ($block1_home->have_posts()) : $block1_home->the_post(); 
			$do_not_duplicate = $post->ID; 
			get_template_part( 'template-parts/content-bgblock', get_post_format() );
			
			 ?>
			<?php endwhile; ?>
			<div id="catalog-home" class="carousel-wrap">
			<h3>
				<?php _e('Выполненные работы'); ?>
			</h3>
				<!-- <div id="slidebx-carousel-prev"></div> -->
				<div class="slick-carousel-home">
				
			<?php $showcat1_home = new WP_Query('post_type=worksdone&posts_per_page=10');
			while ($showcat1_home->have_posts()) : $showcat1_home->the_post(); ?>
			
			
					<?php get_template_part( 'template-parts/content-homeshowcat', get_post_format() ); ?>	
			

			<?php
				
			 endwhile; ?>
				</div>	<!-- .slick-carousel-home -->
				<!-- <div id="slidebx-carousel-next"></div> -->
			</div>	<!-- .carousel-wrap -->
			<div class="carousel-wrap">
			 <h3>
				<?php _e('Типовые изделия'); ?>
			</h3>
			<!-- <div id="carousel-1-prev"></div> -->
			<div class="slick-carousel-home">
			
			
			 <?php $showcat2_home = new WP_Query('post_type=izdelia&posts_per_page=10');
			while ($showcat2_home->have_posts()) : $showcat2_home->the_post(); 

				get_template_part( 'template-parts/content-homeshowcat', get_post_format() );

				wp_reset_postdata();
			 endwhile; ?>
			 
			</div>
			<!-- <div id="carousel-2-next"></div> -->
			</div>	<!-- .carousel-wrap -->
			 <?php $showbenefits_home = new WP_Query('p=94');
		while ($showbenefits_home->have_posts()) : $showbenefits_home->the_post(); 

			get_template_part( 'template-parts/content-bgblock-benefits', get_post_format() );

			wp_reset_postdata();
		 endwhile; ?>
		 <section class="bgblock-workscheme clearfix">
			 <h3 class="cta-home_title cta-home_title-workscheme" id="workscheme">
			 	<?php _e('Схема работы'); ?>
			 </h3>
		<?php $showcta_home = new WP_Query('post_type=workscheme&posts_per_page=6');
		while ($showcta_home->have_posts()) : $showcta_home->the_post(); 

			get_template_part( 'template-parts/content-workscheme', get_post_format() );

			wp_reset_postdata();
		 endwhile; ?>
		 </section>
		<section class="bgblock-testimonials clearfix">
		  <h3 class="cta-home_title bgblock-testimonials-title">
		 		<?php _e('Отзывы'); ?>
		 	</h3>
		 <div class="slidebx-classic_wrap">
		 <!-- <div id="slidebx-classic-prev"></div> -->
		 <div class="slick-classic-home">
		 <?php $showworks_home = new WP_Query('post_type=testimonials&posts_per_page=3');
		 while ($showworks_home->have_posts()) : $showworks_home->the_post(); 

		 	get_template_part( 'template-parts/content-slidebx-classic', get_post_format() );

		 	
		  endwhile; ?>
		  </div>	<!-- .slidebx-classic -->
		  <!-- <div id="slidebx-classic-next"></div> -->
		  </div>	<!-- .slidebx-classic_wrap -->

		</section>
		
		 <h3 class="cta-home_title title-with-definition">
				<?php _e('Для вызова замерщика'); ?>
			</h3>
			<p class="cta-home_subtitle">
				<?php _e('Заполните и отправьте форму. Услуга выезда бесплатна.'); ?>
				
			</p>
		 <?php echo do_shortcode('[contact-form-7 id="112" title="Контактная форма 1"]'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
