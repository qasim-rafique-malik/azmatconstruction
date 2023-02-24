<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buildpro
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?> >
    
    <div id="wrapper" class="<?php if( buildpro_get_option('header_layout') == '4' ) echo 'side-content'; ?>">
        <!-- header begin -->
        <?php if( buildpro_get_option('header_layout') == '2' ){ ?>
        <header class="header-solid">
        <?php }elseif( buildpro_get_option('header_layout') == '3' ){ ?>
        <header class="header-solid header-light">
        <?php }elseif( buildpro_get_option('header_layout') == '4' ){ ?>
        <header class="transparent de_header_2 clone">
        <?php }else{ ?>
        <header class="">
        <?php } ?>

            <?php if(buildpro_get_option( 'top_header' )) { ?>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <?php $info = buildpro_get_option( 'top_info', array() ); ?>
                            <?php if($info) { ?>
                            <div class="col">
                                <?php foreach ( $info as $inf ) { ?>
                                <div class="col">
                                    <?php if($inf['icon']) { ?><span class="id-color"><i class="fa <?php echo esc_attr($inf['icon']); ?>"></i></span><?php } ?><?php echo do_shortcode($inf['details']); ?>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-4 text-right">
                            <?php $socials = buildpro_get_option( 'socials', array() ); ?>
                            <?php if($socials) { ?>
                            <div class="col social">
                                <?php foreach ( $socials as $social ) { ?>
                                <a href="<?php echo esc_url($social['link']); ?>"><i class="fa <?php echo esc_attr($social['icon']); ?>" aria-hidden="true"></i></a>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <h1 id="logo">
                            <?php 
                                $logo = buildpro_get_option( 'logo' ) ? buildpro_get_option( 'logo' ) : get_template_directory_uri().'/images/logo.png'; 
                                $logo2 = buildpro_get_option( 'logo_2' ) ? buildpro_get_option( 'logo_2' ) : get_template_directory_uri().'/images/logo-2.png'; 
                            ?>
                            <a href="<?php echo esc_url( home_url('/') ); ?>">
                                <img class="logo" src="<?php echo esc_url($logo); ?>" class="img-responsive" alt="">
                                <img class="logo-2" src="<?php echo esc_url($logo2); ?>" class="img-responsive" alt="">
                            </a>                            
                        </h1>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <?php

                                $primary = array(
                                    'theme_location'  => 'primary',
                                    'menu'            => '',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'buildpro_bootstrap_navwalker::fallback',
                                    'walker'          => new buildpro_bootstrap_navwalker(),
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="mainmenu" class="'.buildpro_get_option("sepe_list").'">%3$s</ul>',
                                    'depth'           => 0,
                                );
                                if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu( $primary );
                                }
                            ?>    
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <div id="contents" class="no-bottom no-top">