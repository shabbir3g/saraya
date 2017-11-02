<?php
/**
 * saraya functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package saraya
 */

if ( ! function_exists( 'saraya_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function saraya_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on saraya, use a find and replace
		 * to change 'saraya' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'saraya', get_template_directory() . '/languages' );

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
			'left-menu' =>  __( 'Left Menu', 'saraya' ),
			'right-menu' =>  __( 'Right Menu', 'saraya' ),
		) );
		
		
		function default_menu_left_saraya(){
			
			echo '<ul class="nav navbar-nav navbar-left">';
			
			if(is_user_logged_in() && is_front_page()){
				echo '<li><a href="wp-admin/nav-menus.php">Create Menu</a></li>';
				
			}else{
				
				echo '<li><a href="'.home_url().'">Home</a></li>';
			}
			
			
			echo '</ul>';
			
		}
		function default_menu_right_saraya(){
			
			echo '<ul class="nav navbar-nav navbar-right">';
			
			if(is_user_logged_in() && is_front_page()){
				echo '<li><a href="wp-admin/nav-menus.php">Create Menu</a></li>';
				
			}else{
				
				echo '<li><a href="'.home_url().'">Home</a></li>';
			}
			
			
			echo '</ul>';
			
		}
		
		
		
		

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
		add_theme_support( 'custom-background', apply_filters( 'saraya_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'saraya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function saraya_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'saraya_content_width', 640 );
}
add_action( 'after_setup_theme', 'saraya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saraya_widgets_init() {
	
	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget', 'saraya' ),
		'id'            => 'footer-widget',
		'description'   => __( 'Add Footer Widgets here.', 'saraya' ),
		'before_widget' => '<div class="col-md-4 col-sm-12 col-xs-12"> ',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
		register_sidebar( array(
		'name'          => __( 'Maps Page Widget', 'saraya' ),
		'id'            => 'maps-widget',
		'description'   => __( 'Add Maps Page Widgets here.', 'saraya' ),
		'before_widget' => '<div class="col-md-6 col-sm-6 col-xs-12">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Contact Page Widget', 'saraya' ),
		'id'            => 'contact-widget',
		'description'   => __( 'Add Contact Page Widgets here.', 'saraya' ),
		'before_widget' => '<div class="col-md-6 col-sm-6 col-xs-12">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
	
}
add_action( 'widgets_init', 'saraya_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function saraya_scripts() {
	
	wp_enqueue_style( 'saraya-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'saraya-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'saraya-style', get_stylesheet_uri() );
	wp_enqueue_style( 'saraya-responsive', get_template_directory_uri().'/css/responsive.css' );
	
	
	wp_enqueue_script( 'saraya-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'saraya-modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array('jquery'), '', true );
	wp_enqueue_script( 'saraya-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'saraya_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load Theme options file
 */

	require get_template_directory() . '/inc/options.php';


