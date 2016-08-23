<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stainless
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>


	<?php dynamic_sidebar( 'sidebar-2' ); ?>

