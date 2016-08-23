<?php
/**
 * stainless functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stainless
 */

if ( ! function_exists( 'stainless_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stainless_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on stainless, use a find and replace
	 * to change 'stainless' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'stainless', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'stainless' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'stainless_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'stainless_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stainless_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stainless_content_width', 640 );
}
add_action( 'after_setup_theme', 'stainless_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stainless_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stainless' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stainless' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Контактная информация', 'stainless'),
		'id' => 'sidebar-2',
		'description' => esc_html__('Добавьте номер телефона сюда', 'stainless'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p class="nav_phone">',
		'after_title' => '</p>',
	));
}
add_action( 'widgets_init', 'stainless_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stainless_scripts() {
	wp_enqueue_style( 'stainless-style', get_stylesheet_uri() );

	wp_enqueue_script( 'stainless-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'stainless-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
// Подключаем bxslider
	wp_enqueue_style('bxstyle', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.css');
	wp_enqueue_script('bxscript', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.min.js', array('jquery'), true);
	wp_enqueue_script('bxslider-script', get_template_directory_uri() . '/js/bxslider/bxslider_script.js', array('bxscript'), true);
// Подключаем slick slider
	wp_enqueue_style('slickstyle', get_template_directory_uri() . '/js/slick/slick.css');
	wp_enqueue_script('slickslider', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), true, '1.7');
	wp_enqueue_script('slick-script', get_template_directory_uri() . '/js/slick/slick-script.js', array('slickslider'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stainless_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Shortcodes
// Создаем функцию, которая будет выводить записи из категории benefits
function benefits_posts() {
	query_posts(array(
		'post_type' => 'benefits',
		'showposts' => 3));
	if (have_posts()) :
		while (have_posts()) : the_post();
	get_template_part( 'template-parts/content-benefits', get_post_format() );

				wp_reset_postdata();
		// 	$return_string = get_the_title();
		endwhile;
	endif;
	wp_reset_query();
	return $return_string;
}

// Создаем функцию, которая будет выводить записи схемы работы
function workscheme_posts() {
	query_posts(array(
		'post_type' => 'workscheme',
		'showposts' => 6));
	if (have_posts()) :
		while (have_posts()) : the_post();
	get_template_part( 'template-parts/content-workscheme', get_post_format() );

				wp_reset_postdata();
		// 	$return_string = get_the_title();
		endwhile;
	endif;
	wp_reset_query();
	return $return_string;
}

// Регистрируем эту функцию в качестве шорткода
function register_shortcodes() {
	add_shortcode('benefits', 'benefits_posts');
	add_shortcode('workscheme', 'workscheme_posts');
}
// Инициализируем
add_action('init', 'register_shortcodes');

// Adding theme customizer support
function stainless_theme_customizer($wp_customize) {
$wp_customize->add_section('stainless_logo_section', array(
  'title' => __('Logo', 'stainless'),
  'priority' => 30,
  'description' => 'Загрузите лого'
));
$wp_customize->add_setting('stainless_logo');
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'stainless', array(
  'label' => __('Logo', 'stainless'),
  'section' => 'stainless_logo_section',
  'settings' => 'stainless_logo',
)));
}
add_action('customize_register', 'stainless_theme_customizer');
