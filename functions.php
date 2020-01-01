<?php
/**
 * Enqueue JS and CSS files
 */
function setup_theme_scripts(){
	/**
	 * CSS
	 */
	wp_enqueue_style('tdd-style', get_template_directory_uri() . '/assets/css/main.css', false, '1.0', 'all');
	wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/node_modules/magnific-popup/dist/magnific-popup.css', false, '1.0', 'all');
	wp_enqueue_style('tinyslider-style', get_template_directory_uri() . '/assets/node_modules/tiny-slider/dist/tiny-slider.css', false, '1.0', 'all');

	/**
	 * JS
	 */
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', false, '1.0', 'all');
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', false, '1.0', 'all');
	wp_enqueue_script('tinyslider-js', get_template_directory_uri() . '/assets/node_modules/tiny-slider/dist/min/tiny-slider.js', false, '1.0', 'all');

	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main-min.js', false, '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'setup_theme_scripts');

/**
 * Register WordPress menu areas
 */
function setup_theme_nav_menus(){
	register_nav_menus(array(
		'primary'	=> __('Primary Menu', 'base-theme-text-domain')
	));
}
add_action('init', 'setup_theme_nav_menus');

/**
 * Register custom post types
 */
function setup_theme_custom_post_types(){
	//Courses
	register_post_type('contacts', array(
		'labels' => array(
			'name'			=> __('Contacts', 'base-theme-text-domain'),
			'singular_name'	=> __('contact', 'base-theme-text-domain'),
			'menu_name'		=> __('Contacts', 'base-theme-text-domain')
		),
		'public'		=> true,
		'show_ui'		=> true,
		'has_archive'	=> false,
		'menu_icon'		=> 'dashicons-art',
		// 'supports'		=> array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'setup_theme_custom_post_types');

/**
 * Register sidebar areas
 */
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'			=> __('Sidebar Area 1', 'base-theme-text-domain'),
		'id'			=> 'aidebar-1',
		'before_widget'	=> '<div class="footer-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widgettitle">',
		'after_title'	=> '</h3>'
	));
}

/**
 * Bootstrap 4 Wordpress menu
 */
if ( ! file_exists( get_template_directory() . '/vendor/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/vendor/class-wp-bootstrap-navwalker.php';
}

/**
 * Theme support
 */
add_theme_support('post-thumbnails');

?>