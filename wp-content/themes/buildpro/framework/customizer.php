<?php
/**
 * BuildPro theme customizer
 *
 * @package BuildPro
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class BuildPro_Customize {
	/**
	 * Customize settings
	 *
	 * @var array
	 */
	protected $config = array();

	/**
	 * The class constructor
	 *
	 * @param array $config
	 */
	public function __construct( $config ) {
		$this->config = $config;

		if ( ! class_exists( 'Kirki' ) ) {
			return;
		}

		$this->register();
	}

	/**
	 * Register settings
	 */
	public function register() {
		/**
		 * Add the theme configuration
		 */
		if ( ! empty( $this->config['theme'] ) ) {
			Kirki::add_config(
				$this->config['theme'], array(
					'capability'  => 'edit_theme_options',
					'option_type' => 'theme_mod',
				)
			);
		}

		/**
		 * Add panels
		 */
		if ( ! empty( $this->config['panels'] ) ) {
			foreach ( $this->config['panels'] as $panel => $settings ) {
				Kirki::add_panel( $panel, $settings );
			}
		}

		/**
		 * Add sections
		 */
		if ( ! empty( $this->config['sections'] ) ) {
			foreach ( $this->config['sections'] as $section => $settings ) {
				Kirki::add_section( $section, $settings );
			}
		}

		/**
		 * Add fields
		 */
		if ( ! empty( $this->config['theme'] ) && ! empty( $this->config['fields'] ) ) {
			foreach ( $this->config['fields'] as $name => $settings ) {
				if ( ! isset( $settings['settings'] ) ) {
					$settings['settings'] = $name;
				}

				Kirki::add_field( $this->config['theme'], $settings );
			}
		}
	}

	/**
	 * Get config ID
	 *
	 * @return string
	 */
	public function get_theme() {
		return $this->config['theme'];
	}

	/**
	 * Get customize setting value
	 *
	 * @param string $name
	 *
	 * @return bool|string
	 */
	public function get_option( $name ) {
		if ( ! isset( $this->config['fields'][$name] ) ) {
			return false;
		}

		$default = isset( $this->config['fields'][$name]['default'] ) ? $this->config['fields'][$name]['default'] : false;

		return get_theme_mod( $name, $default );
	}
}

/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function buildpro_get_option( $name ) {
	global $buildpro_customize;

	if ( empty( $buildpro_customize ) ) {
		return false;
	}

	if ( class_exists( 'Kirki' ) ) {
		$value = Kirki::get_option( $buildpro_customize->get_theme(), $name );
	} else {
		$value = $buildpro_customize->get_option( $name );
	}

	return apply_filters( 'buildpro_get_option', $value, $name );
}

/**
 * Move some default sections to `general` panel that registered by theme
 *
 * @param object $wp_customize
 */
function buildpro_customize_modify( $wp_customize ) {
	$wp_customize->get_section( 'title_tagline' )->panel     = 'general';
	$wp_customize->get_section( 'static_front_page' )->panel = 'general';
}

add_action( 'customize_register', 'buildpro_customize_modify' );

/**
 * Customizer configuration
 */
$buildpro_customize = new BuildPro_Customize(
	array(
		'theme'    => 'buildpro',

		'panels'   => array(
			'general' => array(
				'priority' => 10,
				'title'    => esc_html__( 'General', 'buildpro' ),
			),
			'header'  => array(
				'priority' => 11,
				'title'    => esc_html__( 'Header', 'buildpro' ),
			),
			'socials'  => array(
				'priority' => 210,
				'title'    => esc_html__( 'Socials', 'buildpro' ),
			),
		),

		'sections' => array(

			// Panel Header
			'top_header'      => array(
				'title'       => esc_html__( 'Top Header', 'buildpro' ),
				'description' => '',
				'priority'    => 10,
				'capability'  => 'edit_theme_options',
				'panel'       => 'header',
			),
			'header'      => array(
				'title'       => esc_html__( 'Navigation', 'buildpro' ),
				'description' => '',
				'priority'    => 10,
				'capability'  => 'edit_theme_options',
				'panel'       => 'header',
			),
			'logo'        => array(
				'title'       => esc_html__( 'Site Logo', 'buildpro' ),
				'description' => '',
				'priority'    => 50,
				'capability'  => 'edit_theme_options',
				'panel'       => 'header',
			),
			'page_header' => array(
				'title'       => esc_html__( 'Page Header', 'buildpro' ),
				'description' => '',
				'priority'    => 15,
				'capability'  => 'edit_theme_options',
			),

			// Panel Socials
			'socials'      => array(
				'title'       => esc_html__( 'Socials', 'buildpro' ),
				'description' => '',
				'priority'    => 220,
				'capability'  => 'edit_theme_options',
			),

			
			// Panel Content
			'content'     => array(
				'title'       => esc_html__( 'Blog', 'buildpro' ),
				'description' => '',
				'priority'    => 240,
				'capability'  => 'edit_theme_options',
			),

			// Panel Projects
			'project'     => array(
				'title'       => esc_html__( 'Portfolio', 'buildpro' ),
				'description' => '',
				'priority'    => 240,
				'capability'  => 'edit_theme_options',
			),

			// Panel Shop
			'shop'     => array(
				'title'       => esc_html__( 'Shop', 'buildpro' ),
				'description' => '',
				'priority'    => 240,
				'capability'  => 'edit_theme_options',
			),

			// Panel Footer
			'footer'     => array(
				'title'       => esc_html__( 'Footer', 'buildpro' ),
				'description' => '',
				'priority'    => 240,
				'capability'  => 'edit_theme_options',
			),

			// 404
			'error'     => array(
				'title'       => esc_html__( '404 Error', 'buildpro' ),
				'description' => '',
				'priority'    => 245,
				'capability'  => 'edit_theme_options',
			),

			// Coming Soon
			'csoon'     => array(
				'title'       => esc_html__( 'Coming Soon', 'buildpro' ),
				'description' => '',
				'priority'    => 245,
				'capability'  => 'edit_theme_options',
			),

			// Panel Styling
			'styling'     => array(
				'title'       => esc_html__( 'Miscellaneous', 'buildpro' ),
				'description' => '',
				'priority'    => 250,
				'capability'  => 'edit_theme_options',
			),
		),

		'fields'   => array(
			
			//Top Header
			'top_header' => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Enable Top Header', 'buildpro' ),
				'section'  => 'top_header',
				'default'  => '1',
				'priority' => 10,
			),
			'bg_top'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background', 'buildpro' ),
				'section'  => 'top_header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'top_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_top'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text', 'buildpro' ),
				'section'  => 'top_header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'top_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'top_info'     => array(
				'type'     => 'repeater',
				'label'    => esc_html__( 'Top Infomation', 'buildpro' ),
				'section'  => 'top_header',
				'priority' => 10,
				'default'  => array(),
				'fields'   => array(
					'icon' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Icon Class', 'buildpro' ),
						'description' => esc_html__( 'This will be the icon: http://fontawesome.io/icons/', 'buildpro' ),
						'default'     => '',
					),
					'details' => array(
						'type'        => 'textarea',
						'label'       => esc_html__( 'Details', 'buildpro' ),
						'description' => esc_html__( 'This will be the details', 'buildpro' ),
						'default'     => '',
					),
				),
				'active_callback' => array(
					array(
					  	'setting'  => 'top_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'socials'     => array(
				'type'     => 'repeater',
				'label'    => esc_html__( 'Socials', 'buildpro' ),
				'section'  => 'top_header',
				'priority' => 10,
				'default'  => array(),
				'fields'   => array(
					'icon' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Icon Class', 'buildpro' ),
						'description' => esc_html__( 'This will be the social icon: http://fontawesome.io/icons/', 'buildpro' ),
						'default'     => '',
					),
					'link' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Link URL', 'buildpro' ),
						'description' => esc_html__( 'This will be the social link', 'buildpro' ),
						'default'     => '',
					),
				),
				'active_callback' => array(
					array(
					  	'setting'  => 'top_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			

			// Header layout
			'header_layout'  => array(
				'type'     => 'select',
				'label'    => esc_html__( 'Header Layout', 'buildpro' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
				'choices'  => array(
					'1' 	=> esc_html__( 'Header Transparent', 'buildpro' ),
					'2' 	=> esc_html__( 'Header Dark', 'buildpro' ),
					'3' 	=> esc_html__( 'Header Light', 'buildpro' ),
					'4' 	=> esc_html__( 'Side Navigation', 'buildpro' ),
				),
			),
			'custom_menu'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Custom Color Menu', 'buildpro' ),
				'section'  => 'header',
				'default'  => '0',
				'priority' => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'header_layout',
					  	'operator' => 'in',
					  	'value'    => array('2', '3', '4'),
				 	),
				),
			),
			'bg_menu'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Main Menu', 'buildpro' ),
				'section'  => 'header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'header_layout',
					  	'operator' => 'in',
					  	'value'    => array('2', '3', '4'),
				 	),
				 	array(
					  	'setting'  => 'custom_menu',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_menu'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Menu', 'buildpro' ),
				'section'  => 'header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'custom_menu',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),#333
			),
			'bg_smenu'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Scroll Menu', 'buildpro' ),
				'section'  => 'header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'header_layout',
					  	'operator' => 'in',
					  	'value'    => array('2', '3'),
				 	),
				 	array(
					  	'setting'  => 'custom_menu',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_smenu'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Scroll Menu', 'buildpro' ),
				'section'  => 'header',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'header_layout',
					  	'operator' => 'in',
					  	'value'    => array('2', '3'),
				 	),
				 	array(
					  	'setting'  => 'custom_menu',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'sepe_list'    => array(
				'type'     => 'select',
				'label'    => esc_html__( 'Seperator', 'buildpro' ),
				'section'  => 'header',
				'default'  => 'no-separator',
				'priority' => 10,
				'choices'  => array(
					'no-separator' 	 	=> esc_html__( 'None', 'buildpro' ),
					'line-separator' 	=> esc_html__( 'Line', 'buildpro' ),
					'circle-separator'  => esc_html__( 'Circle', 'buildpro' ),
					'dotted-separator' 	=> esc_html__( 'Dotted', 'buildpro' ),
					'plus-separator' 	=> esc_html__( 'Plus', 'buildpro' ),
					'strip-separator' 	=> esc_html__( 'Strip', 'buildpro' ),
				),
			),
			'sticky'     => array(
				'type'     => 'toggle',
				'label'    => esc_html__( 'Sticky Header', 'buildpro' ),
				'section'  => 'header',
				'default'  => '1',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'header_layout',
					  	'operator' => 'in',
					  	'value'    => array('2', '3'),
				 	)
				),
			),
			

			// Logo
			'logo'           => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Logo', 'buildpro' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_width'     => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Logo Width', 'buildpro' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_height'    => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Logo Height', 'buildpro' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_position'  => array(
				'type'     => 'spacing',
				'label'    => esc_html__( 'Logo Margin', 'buildpro' ),
				'section'  => 'logo',
				'priority' => 10,
				'default'  => array(
					'top'    => '17px',
					'bottom' => '0',
					'left'   => '0',
					'right'  => '0',
				),
			),

			'logo_2'           => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Logo Scroll', 'buildpro' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_2_width'     => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Logo Scroll Width', 'buildpro' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_2_height'    => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Logo Scroll Height', 'buildpro' ),
				'section'  => 'logo',
				'default'  => '',
				'priority' => 10,
			),
			'logo_2_position'  => array(
				'type'     => 'spacing',
				'label'    => esc_html__( 'Logo Scroll Margin', 'buildpro' ),
				'section'  => 'logo',
				'priority' => 10,
				'default'  => array(
					'top'    => '10px',
					'bottom' => '0',
					'left'   => '0',
					'right'  => '0',
				),
			),
			

			// Page Header
			'page_header'    => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Page Header', 'buildpro' ),
				'description' => esc_html__( 'Enable to show page header on whole site', 'buildpro' ),
				'section'     => 'page_header',
				'default'     => '1',
				'priority'    => 10,
			),
			
			'page_header_bg' => array(
				'type'        => 'image',
				'label'       => esc_html__( 'Background Image', 'buildpro' ),
				'description' => esc_html__( 'Upload a page header background image', 'buildpro' ),
				'section'     => 'page_header',
				'default'     => '',
				'priority'    => 10,
				'active_callback' => array(
				 	array(
					  	'setting'  => 'page_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'breadcrumb'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Breadcrumb', 'buildpro' ),
				'description' => esc_html__( 'Enable to show a breadcrumb bellow the site header', 'buildpro' ),
				'section'     => 'page_header',
				'default'     => '1',
				'priority'    => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'page_header',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),


			// Content
			'blog_layout'  => array(
				'type'     => 'radio-image',
				'label'    => esc_html__( 'Blog List Layout', 'buildpro' ),
				'section'  => 'content',
				'default'  => 'default',
				'priority' => 10,
				'choices'  => array(
					'default' 	=> get_template_directory_uri() . '/framework/admin/images/right.png',
					'left-bar' 	=> get_template_directory_uri() . '/framework/admin/images/left.png',
					'no-bar' 	=> get_template_directory_uri() . '/framework/admin/images/full.png',
				),
			),
			'post_layout'  => array(
				'type'     => 'radio-image',
				'label'    => esc_html__( 'Single Blog Layout', 'buildpro' ),
				'section'  => 'content',
				'default'  => 'default',
				'priority' => 10,
				'choices'  => array(
					'default' 	=> get_template_directory_uri() . '/framework/admin/images/right.png',
					'left-bar' 	=> get_template_directory_uri() . '/framework/admin/images/left.png',
					'no-bar' 	=> get_template_directory_uri() . '/framework/admin/images/full.png',
				),
			),
			'title_single' => array(
				'type'    		=> 'text',
				'label'   		=> esc_html__( 'Title Header Single', 'buildpro' ),
				'section' 		=> 'content',
				'default' 		=> '',
				'priority'    	=> 10,
			),
			'excerpt_length' => array(
				'type'    => 'number',
				'label'   => esc_html__( 'Excerpt Length', 'buildpro' ),
				'section' => 'content',
				'default' => 50,
				'choices' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
			),

			//Portfolio
			'navigation'      => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Show Navigation Project', 'buildpro' ),
				'description' => esc_html__( 'Display navigation for each projects on single portfolio', 'buildpro' ),
				'section'     => 'project',
				'default'     => '1',
				'priority'    => 11,
			),
			'project_link' => array(
				'type'    		=> 'text',
				'label'   		=> esc_html__( 'Link of Portfolio Page', 'buildpro' ),
				'section' 		=> 'project',
				'default' 		=> '#',
				'priority'    	=> 12,
				'active_callback' => array(
					array(
					  	'setting'  => 'navigation',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),

			//Shop
			'page_header_shop' => array(
				'type'        => 'image',
				'label'       => esc_html__( 'Background Image', 'buildpro' ),
				'description' => esc_html__( 'Upload a page header background image', 'buildpro' ),
				'section'     => 'shop',
				'default'     => '',
				'priority'    => 10,
			),
			'shop_layout'  => array(
				'type'     => 'radio-image',
				'label'    => esc_html__( 'Shop Layout', 'buildpro' ),
				'section'  => 'shop',
				'default'  => 'default',
				'priority' => 10,
				'choices'  => array(
					'default' 	=> get_template_directory_uri() . '/framework/admin/images/right.png',
					'left-bar' 	=> get_template_directory_uri() . '/framework/admin/images/left.png',
					'no-bar' 	=> get_template_directory_uri() . '/framework/admin/images/full.png',
				),
			),
			'col_shop'     => array(
				'type'     => 'select',
				'label'    => esc_html__( 'Number Columns', 'buildpro' ),
				'description' => esc_html__( 'Store column count for displaying the grid', 'buildpro' ),
				'section'  => 'shop',
				'default'  => '3',
				'priority' => 10,
				'choices'  => array(
					'2' 	 => esc_html__( '2 Columns', 'buildpro' ),
					'3' 	 => esc_html__( '3 Columns', 'buildpro' ),
					'4'  	 => esc_html__( '4 Columns', 'buildpro' ),
				),
			),
			'per_shop' => array(
				'type'    		=> 'number',
				'label'   		=> esc_html__( 'Products Per Page', 'buildpro' ),
				'section' 		=> 'shop',
				'default' 		=> '6',
				'priority'    	=> 12
			),

			//Footer
			'w_footer'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Footer Widget', 'buildpro' ),
				'section'     => 'footer',
				'default'     => '1',
				'priority'    => 10,
			),
			'bg_footer'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Color Footer', 'buildpro' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'w_footer',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_footer'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Footer', 'buildpro' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'w_footer',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_ftitle'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Title Widget', 'buildpro' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'w_footer',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'bfooter'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Footer Bottom', 'buildpro' ),
				'section'     => 'footer',
				'default'     => '1',
				'priority'    => 10,
			),
			'bg_bottom'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Bottom Footer', 'buildpro' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'bfooter',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'color_bottom' => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Color Text Footer', 'buildpro' ),
				'section'  => 'footer',
				'default'  => '',
				'priority' => 10,
				'active_callback' => array(
					array(
					  	'setting'  => 'bfooter',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'f_socials'     => array(
				'type'     => 'repeater',
				'label'    => esc_html__( 'Socials', 'buildpro' ),
				'section'  => 'footer',
				'priority' => 10,
				'default'  => array(),
				'fields'   => array(
					'icon' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Icon Class', 'buildpro' ),
						'description' => esc_html__( 'This will be the social icon: http://fontawesome.io/icons/', 'buildpro' ),
						'default'     => '',
					),
					'link' => array(
						'type'        => 'text',
						'label'       => esc_html__( 'Link URL', 'buildpro' ),
						'description' => esc_html__( 'This will be the social link', 'buildpro' ),
						'default'     => '',
					),
				),
				'active_callback' => array(
					array(
					  	'setting'  => 'bfooter',
					  	'operator' => '==',
					  	'value'    => 1,
				 	),
				),
			),
			'copy_right'      => array(
				'type'        => 'textarea',
				'label'       => esc_html__( 'Copy Right Text', 'buildpro' ),
				'section'     => 'footer',
				'default'     => '',
				'priority'    => 10,
			),

			// 404
			'h_error'      => array(
				'type'     => 'number',
				'label'    => esc_html__( 'Height', 'buildpro' ),
				'section'  => 'error',
				'default'  => '600',
				'priority' => 10,
			),
			'bgi_error'    => array(
				'type'     => 'image',
				'label'    => esc_html__( 'Background Image', 'buildpro' ),
				'section'  => 'error',
				'default'  => '',
				'priority' => 10,
			),
			'bgc_error'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Background Color', 'buildpro' ),
				'section'  => 'error',
				'default'  => '',
				'priority' => 10,
			),
			'c_error'      => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Text Color', 'buildpro' ),
				'section'  => 'error',
				'default'  => '',
				'priority' => 10,
			),

			//Styling
			'preload'     => array(
				'type'        => 'toggle',
				'label'       => esc_html__( 'Preloader', 'buildpro' ),
				'section'     => 'styling',
				'default'     => '1',
				'priority'    => 10,
			),
			'main_color'    => array(
				'type'     => 'color',
				'label'    => esc_html__( 'Primary Color', 'buildpro' ),
				'section'  => 'styling',
				'default'  => '#ffd200',
				'priority' => 10,
			),
			'custom_css'     => array(
				'type'        => 'code',
				'label'       => esc_html__( 'Custom Code', 'buildpro' ),
				'description' => esc_html__( 'Add more js, css, html... code here.', 'buildpro' ),
				'section'     => 'styling',
				'default'     => '',
				'priority'    => 10,
			),
		),
	)
);