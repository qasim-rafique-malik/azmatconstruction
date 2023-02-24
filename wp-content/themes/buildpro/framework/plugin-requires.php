<?php
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'buildpro_register_required_plugins' );
function buildpro_register_required_plugins() {
    $protocol = is_ssl() ? 'http' : 'http';
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.      
        array(
            'name'               => esc_html__( 'Meta Box', 'buildpro' ),
            'slug'               => 'meta-box',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(            
            'name'               => esc_html__( 'Kirki Customizer', 'buildpro' ), // The plugin name.
            'slug'               => 'kirki', // The plugin slug (typically the folder name).
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => esc_html__( 'WPBakery Visual Composer', 'buildpro' ), // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => esc_url($protocol.'://oceanthemes.net/plugins-required/js_composer.zip'), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
            'name'      => esc_html__( 'Contact Form 7', 'buildpro' ),
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => esc_html__( 'Woocommerce', 'buildpro' ),
            'slug'      => 'woocommerce',
            'required'  => false,
        ),
        array(            
            'name'               => esc_html__( 'Breadcrumb Navxt', 'buildpro' ), // The plugin name.
            'slug'               => 'breadcrumb-navxt', // The plugin slug (typically the folder name).
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => esc_html__( 'Revolution Slider', 'buildpro' ), // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => esc_url($protocol.'://oceanthemes.net/plugins-required/revslider.zip'),// The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => esc_html__( 'OT Services', 'buildpro' ), // The plugin name.
            'slug'               => 'ot_service', // The plugin slug (typically the folder name).
            'source'             => esc_url($protocol.'://oceanthemes.net/plugins-required/buildpro/ot_service.zip'), // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        
        array(            
            'name'               => esc_html__( 'OT Portfolio', 'buildpro' ), // The plugin name.
            'slug'               => 'ot_portfolio', // The plugin slug (typically the folder name).
            'source'             => esc_url($protocol.'://oceanthemes.net/plugins-required/buildpro/ot_portfolio.zip'), // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => esc_html__( 'OT BuildPro Demo Content', 'buildpro' ), // The plugin name.
            'slug'               => 'buildpro-demo-content', // The plugin slug (typically the folder name).
            'source'             => esc_url($protocol.'://oceanthemes.net/plugins-required/buildpro/buildpro-demo-content.zip'), // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        
    );
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}
