<?php
/**
 * Plugin Name: BuildPro Demo Content
 * Plugin URI: http://oceanthemes.net
 * Description: One click import demo content
 * Author: OceanThemes
 * Author URI: http://oceanthemes.net
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Importer classes
if( ! defined( 'WP_LOAD_IMPORTERS' ) ) {
	define( 'WP_LOAD_IMPORTERS', true );
}

if ( ! defined( 'CLAUDIO_DC_DIR' ) ) {
	define( 'CLAUDIO_DC_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'CLAUDIO_DC_URL' ) ) {
	define( 'CLAUDIO_DC_URL', plugin_dir_url( __FILE__ ) );
}

if( ! class_exists( 'TA_Content_Importer' ) ) {
	require_once CLAUDIO_DC_DIR . '/importer/wordpress-importer.php';
}

if ( ! class_exists( 'TA_Widgets_Importer') ) {
	require_once CLAUDIO_DC_DIR . '/importer/widgets-importer.php';
}

/**
 * Main class for importing demo content
 *
 * @version 1.0.0
 */
class Claudio_Demo_Content {
	/**
	 * Demo data configuration
	 *
	 * @var array
	 */
	public $data;

	/**
	 * Construction function
	 * Add new admin menu under Appearance menu
	 */
	public function __construct( $data = array() ) {
		$this->data = $data;

		add_action( 'admin_menu', array( $this, 'menu' ) );
		add_action( 'admin_notices', array( $this, 'notice' ) );
	}

	/**
	 * Add new menu under Appearance menu
	 */
	public function menu() {
		add_theme_page(
			__( 'Import Theme Demo Data', 'claudio' ),
			__( 'Theme Demo Data', 'claudio' ),
			'edit_theme_options',
			'import-demo-content',
			array( $this, 'page' )
		);
	}

	/**
	 * Display notice
	 */
	public function notice() {
		global $pagenow;

		// Only display on themes page
		if ( 'themes.php' != $pagenow ) {
			return;
		}

		// Only display on import demo page
		if ( ! isset( $_GET['page'] ) || 'import-demo-content' != $_GET['page'] ) {
			return;
		}

		if ( isset( $_GET['import'] ) && 'success' == $_GET['import'] ) {
			return;
		}
		?>

		<div class="updated notice is-dismissible">
			<p><?php _e( 'Before starting the import, you have to install all required plugins and other plugins that you want to use.', 'claudio' ) ?></p>
			<button type="button" class="notice-dismiss"><span class="screen-reader-text"><?php _e( 'Dismiss this notice.', 'claudio' ) ?></span></button>
		</div>

		<?php
	}

	/**
	 * Admin page for importing demo content
	 */
	public function page() {
		$result = $this->import();
		?>

		<div class="wrap">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

			<?php if ( $result ) : ?>
				<p>
					<?php _e( 'All Done!', 'claudio' ) ?>
				</p>
			<?php else : ?>

				<p>
					<?php _e( 'Select what content do you want to import. Leave default to import all demo data.', 'claudio' ) ?>
				</p>

				<form id="ta-import-form" action="" method="post">
					<?php wp_nonce_field( 'ta-import-demo-data', '_ta_import_nonce' ); ?>

					<p>
						<label>
							<input type="checkbox" name="import[]" value="content" checked="checked">
							<?php _e( 'Content', 'claudio' ) ?>
						</label>
					</p>

					<p>
						<label>
							<input type="checkbox" name="import[]" value="widgets" checked="checked">
							<?php _e( 'Widgets', 'claudio' ) ?>
						</label>
					</p>

					<p>
						<label>
							<input type="checkbox" name="import[]" value="theme_options" checked="checked">
							<?php _e( 'Theme Options', 'claudio' ) ?>
						</label>
					</p>
					<?php if ( $this->data['sliders'] ) : ?>
					<p>
						<label>
							<input type="checkbox" name="import[]" value="sliders" checked="checked">
							<?php _e( 'Revolution Sliders (require plugin installed)', 'claudio' ) ?>
						</label>
					</p>
					<?php endif; ?>

					<input type="submit" class="button button-primary" value="<?php _e( 'Import Demo Content', 'claudio' ) ?>">

					<p class="description"><?php _e( 'It usally take less than one minute to finish. Please be patient.', 'claudio' ) ?></p>
				</form>

			<?php endif; ?>
		</div>

		<?php
	}

	/**
	 * Process importing request
	 * Redirect when success to avoid user refresh browser
	 */
	public function import() {
		if ( ! isset( $_POST['_ta_import_nonce'] ) || ! wp_verify_nonce( $_POST['_ta_import_nonce'], 'ta-import-demo-data' ) ) {
			return;
		}

		if ( ! isset( $_POST['import'] ) || empty( $_POST['import'] ) ) {
			return;
		}

		$import = (array) $_POST['import'];

		// Start importing
		if ( in_array( 'content', $import ) ) {
			$this->import_content();
			$this->import_menu_locations();
		}

		if ( in_array( 'theme_options', $import ) ) {
			$file = CLAUDIO_DC_DIR . '/demo/customizer.dat';
			$this->import_customizer( $file );
		}

		if ( in_array( 'widgets', $import ) ) {
			$this->import_widgets();
		}

		if ( in_array( 'content', $import ) ) {
			$this->import_menu_locations();
		}

		if ( in_array( 'sliders', $import ) ) {
			$this->import_sliders();
		}
		// End importing

		// Set home & blog page
		if ( isset( $this->data['home_page'] ) ) {
			$home = get_page_by_title( $this->data['home_page'] );

			if ( $home ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $home->ID ); // Front Page
			}
		}

		if ( isset( $this->data['blog_page'] ) ) {
			$blog = get_page_by_title( $this->data['blog_page'] );

			if ( $blog ) {
				update_option( 'page_for_posts', $blog->ID ); // Front Page
			}
		}

		return true;
	}

	/**
	 * Import content
	 * Import posts, pages, menus, custom post types
	 *
	 * @param  string $file The exported file's name
	 */
	public function import_content( $file = 'demo-content.xml' ) {
		if ( ! file_exists( CLAUDIO_DC_DIR . '/demo/' . $file ) ) {
			return;
		}

		$import = new TA_Content_Importer();
		$xml    = CLAUDIO_DC_DIR . '/demo/'. $file;

		$import->fetch_attachments = true;

		ob_start();
		$import->import( $xml );
		ob_end_clean();
	}

	/**
	 * Import menu locations
	 *
	 * @param  string $file The exported file's name
	 */
	public function import_menu_locations( $file = 'menus.txt' ) {
		if ( ! file_exists( CLAUDIO_DC_DIR . '/demo/' . $file ) ) {
			return;
		}

		$file_path 	= CLAUDIO_DC_URL . '/demo/' . $file;
		$file_data 	= wp_remote_get( $file_path );
		$data 		= maybe_unserialize( base64_decode( $file_data['body'] ) );
		$menus 		= wp_get_nav_menus();

		foreach( $data as $key => $val ) {
			foreach( $menus as $menu ) {
				if( $val && $menu->slug == $val ) {
					$data[$key] = absint( $menu->term_id );
				}
			}
		}

		set_theme_mod( 'nav_menu_locations', $data );
	}

	/**
	 * Import theme options
	 *
	 * @param  string $file The exported file's name
	 */
	public function import_customizer( $file ) {
		if ( ! file_exists( $file ) ) {
			return false;
		}

		if( ! class_exists( 'Soo_Demo_Customizer_Importer' ) ) {
			require_once plugin_dir_path( __FILE__ ) . 'includes/customizer-importer.php';
		}

		do_action( 'soo_before_import_customizer', $file );

		$import = new Soo_Demo_Customizer_Importer();
		$import->download_images = true;
		$import->import( $file );

		return true;
	}

	/**
	 * Import widgets
	 *
	 * @param  string $file The exported file's name
	 */
	function import_widgets( $file = 'widgets-data.json' ) {
		if ( ! file_exists( CLAUDIO_DC_DIR . '/demo/' . $file ) ) {
			return;
		}

		$file_path 	= CLAUDIO_DC_URL . '/demo/'. $file;
		$file_data 	= wp_remote_get( $file_path );
		$data 		= json_decode( $file_data['body'] );

		$importer   = new TA_Widgets_Importer();
		$importer->import( $data );
	}

	/**
	 * Import exported revolution sliders
	 *
	 * @param  string $path The exported files' path
	 */
	public function import_sliders( $path = '/demo/sliders/' ) {
		if ( ! class_exists( 'RevSlider' ) ) {
			return;
		}

		$files = scandir( CLAUDIO_DC_DIR . $path );

		if ( empty( $files ) ) {
			return;
		}

		$slider = new RevSlider();

		ob_start();
		foreach( $files as $file ) {
			if ( $file == '.' || $file == '..' ) {
				continue;
			}
			$file = CLAUDIO_DC_DIR . $path . $file;
			if ( 'zip' != strtolower( pathinfo( $file, PATHINFO_EXTENSION ) ) ) {
				continue;
			}

			$response = $slider->importSliderFromPost( true, true, $file );
		}
		ob_clean();
	}
}

/**
 * Init plugin
 *
 * @since 1.1
 *
 * @return void
 */
function claudio_demo_content_init() {
	new Claudio_Demo_Content( array(
		'home_page' => 'Home 1',
		'blog_page' => 'Blog',
		'base_url'  => 'http://demo.oceanthemes.net/buildpro/',
		'sliders'   => true,
	) );
}

add_action( 'plugins_loaded', 'claudio_demo_content_init' );

