<?php
/**
 * evenheat functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package evenheat
 */

if ( ! function_exists( 'evenheat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function evenheat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on evenheat, use a find and replace
	 * to change 'evenheat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'evenheat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'evenheat' ),
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
	add_theme_support( 'custom-background', apply_filters( 'evenheat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'evenheat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function evenheat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'evenheat_content_width', 640 );
}
add_action( 'after_setup_theme', 'evenheat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function evenheat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'evenheat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'evenheat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'evenheat_widgets_init' );

/*Image Sizes*/
add_image_size( 'slider', 1600, 550, true );
add_image_size( 'page-banner', 1280, 300, true );
add_image_size( 'case-study-thumb', 740, 520, true );
add_image_size( 'case-studies', 1000, 1000, true );
add_image_size( 'service-boxes', 540, 540, true );
add_image_size( 'case-study-thumbnail', 600, 600, true );
add_image_size( 'case-study-archive', 340, 200, true );
add_image_size( 'blog-image', 400, 400, true );
add_image_size( 'case-studies-home', 700, 340, true );
add_image_size( 'gallery-images', 400, 400, true );

add_action('init', 'create_case_studies_type');
function create_case_studies_type() {
    $labels = array(
            'name' => __('Case Studies'),
            'singular_name'  => __('Case Studies'),
);
    $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'menu_position' => 5,
            'description' => 'Case Studies',
            'rewrite' => array('slug' => ''),
            'supports' => array( 'title','thumbnail', 'editor'),
			// 'taxonomies' => array('category')
    );

    register_post_type('case-studies', $args);
    //flush_rewrite_rules();
}

/*Options*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Company Details',
		'menu_title'	=> 'Company Details',
		'menu_slug'		=> 'company-details',
		'icon_url' 		=> 'dashicons-location'
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'menu_slug'		=> 'testimonials',
		'icon_url' 		=> 'dashicons-admin-comments'
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Home Page Service Boxes',
		'menu_title'	=> 'Home Page Service Boxes',
		'menu_slug'		=> 'home-page-service-boxes',
		'icon_url' 		=> 'dashicons-format-aside'
	));
}

/**
 * Character limit
 */
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 200);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'...';
	return $excerpt;
}

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyCFAQ6-lvcOZnUTaRoPQPVZ3yG_SW_IUWU');
}
add_action('acf/init', 'my_acf_init');

// Disable Head Code
function remove_head_mess() {

   remove_action('admin_print_styles','print_emoji_styles' );
   remove_action('wp_head','print_emoji_detection_script', 7 );
   remove_action('admin_print_scripts','print_emoji_detection_script' );
   remove_action('wp_print_styles','print_emoji_styles' );
   remove_action('wp_head','wp_shortlink_wp_head', 10, 0);
   remove_action('wp_head','wp_generator');
   remove_action('wp_head','wp_oembed_add_discovery_links', 10 );
   remove_action('wp_head','wp_oembed_add_host_js');
   remove_action('wp_head','rsd_link');
   remove_action('wp_head','wlwmanifest_link');
   remove_action('wp_head','rest_output_link_wp_head');
   remove_action('wp_head', 'wp_resource_hints', 2 );
   remove_filter('wp_mail', 'wp_staticize_emoji_for_email' );
   remove_filter('the_content_feed', 'wp_staticize_emoji' );
   remove_filter('comment_text_rss', 'wp_staticize_emoji' );
   remove_action('wp_head', 'feed_links', 2);
   remove_action('wp_head', 'feed_links_extra', 3);

}
add_action( 'init', 'remove_head_mess' );

/* Enqueue Scripts and Styles. */
function evenheat_scripts() {
//Style
wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '0.0.1' );
// Typekit
wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');

// Magnific Popup
wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',array(),'1.0.0',true);
// jQuery
wp_enqueue_script( 'jquery' );
// Slick Slider
wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick.min.js',array(),'1.0.0',true);
// Main JS
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.min.js',array(),'1.0.0',true);
// Bootstrap
wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
// Google Maps
wp_enqueue_script( 'google-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyCFAQ6-lvcOZnUTaRoPQPVZ3yG_SW_IUWU', '', '' );
}

add_action( 'wp_enqueue_scripts', 'evenheat_scripts' );