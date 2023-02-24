<?php 

//Custom Style Frontend
if(!function_exists('buildpro_custom_frontend_style')){
    function buildpro_custom_frontend_style(){
    	$style_css 	= '';
        $bg_top 	= '';
        $color_top	= '';
        $bg_h       = '';
        $color_m    = '';
        $bg_sm      = '';

        $bg_ph      = '';
        $bg_hshop   = '';

        $logo_mar 	= '';
        $logo_w 	= '';
        $logo_h 	= '';
        $logo2_mar  = '';
        $logo2_w    = '';
        $logo2_h    = '';

        $bg_ft		= '';
        $color_ft	= '';
        $color_fti	= '';
        $bg_bt		= '';
        $color_bt	= '';
        $color_sm	= '';

        $bg_bd      = '';

        $bgcms      = '';
        $bgi_error  = '';
        $bgc_error  = '';
        $c_error    = '';
        $h_error 	= '';
        $bg_fimg 	= '';



        //Header
        if(buildpro_get_option('bg_top')){
        	$bg_top = 'header .info{ background: '.buildpro_get_option('bg_top').'!important; }';
        }
        if(buildpro_get_option('color_top')){
        	$color_top = 'header .info, header .info .social i{ color: '.buildpro_get_option('color_top').'!important; }';
        }

        if(buildpro_get_option('custom_menu')){

            if(buildpro_get_option('bg_menu')){
            	$bg_h = 'header.header-solid, header.header-solid.header-light, .side-layout header{ background: '.buildpro_get_option('bg_menu').'; }';
            }
            if(buildpro_get_option('color_menu')){
            	$color_m = '#mainmenu > li > a, header.header-solid.header-light #mainmenu >li > a{ color: '.buildpro_get_option('color_menu').'; }';
            }
            if(buildpro_get_option('bg_smenu')){
                $bg_sm = 'header.smaller.clone, header.header-solid.header-light.smaller{ background: '.buildpro_get_option('bg_smenu').'; border-color: '.buildpro_get_option('bg_smenu').'; }';
            }
            if(buildpro_get_option('color_smenu')){
                $color_sm = 'header.smaller.clone #mainmenu > li > a, header.clone.header-solid.header-light #mainmenu >li > a{ color: '.buildpro_get_option('color_smenu').'; }';
            }
        }

        //Logo
        if(buildpro_get_option('logo_width')){
            $logo_w = '#logo img { width: '.buildpro_get_option('logo_width').'px; }';
        }
        if(buildpro_get_option('logo_height')){
            $logo_h = '#logo img { height: '.buildpro_get_option('logo_height').'px; }';
        }
        if(buildpro_get_option('logo_position')){
            $space = buildpro_get_option('logo_position');
            $logo_mar = '#logo { margin: '.$space["top"].' '.$space["right"].' '.$space["bottom"].' '.$space["left"].'; }';
        }
        //Logo Smaller
        if(buildpro_get_option('logo_2_width')){
            $logo2_w = '.smaller #logo img { width: '.buildpro_get_option('logo_2_width').'px; }';
        }
        if(buildpro_get_option('logo_2_height')){
            $logo2_h = '.smaller #logo img { height: '.buildpro_get_option('logo_2_height').'px; }';
        }
        if(buildpro_get_option('logo_2_position')){
            $space2 = buildpro_get_option('logo_2_position');
            $logo2_mar = '.smaller #logo { margin: '.$space2["top"].' '.$space2["right"].' '.$space2["bottom"].' '.$space2["left"].'; }';
        }

        //Page Header
        if(buildpro_get_option('page_header_bg')){
            $bg_ph = '#subheader{ background-image: url('.buildpro_get_option('page_header_bg').'); }';
        }

        //Page Header Shop
        if(buildpro_get_option('page_header_shop')){
            $bg_hshop = '#subheader.sheader-shop{ background-image: url('.buildpro_get_option('page_header_shop').'); }';
        }

        //Coming Soon
        if(buildpro_get_option('bgcms')){
        	$bgcms = '.bgcms{ background-image: url('.buildpro_get_option('bgcms').'); }';
        }

        //404
        if(buildpro_get_option('h_error')){
            $h_error = 'section.bg-error{ height: '.buildpro_get_option('h_error').'px; }';
        }
        if(buildpro_get_option('bgi_error')){
            $bgi_error = 'section.bg-error{ background-image: url('.buildpro_get_option('bgi_error').'); }';
        }
        if(buildpro_get_option('bgc_error')){
            $bgc_error = 'section.bg-error{ background-color: '.buildpro_get_option('bgc_error').'; }';
        }
        if(buildpro_get_option('c_error')){
            $c_error = 'section.bg-error *{ color: '.buildpro_get_option('c_error').'; }';
        }

        //Footer
        if(buildpro_get_option('bg_footer')){
        	$bg_ft = 'footer{ background: '.buildpro_get_option('bg_footer').'; }';
        }
        if(buildpro_get_option('color_footer')){
        	$color_ft = 'footer, footer a, footer .widget li a{ color: '.buildpro_get_option('color_footer').'; }';
        }
        if(buildpro_get_option('color_ftitle')){
        	$color_fti = 'footer .widget h3{ color: '.buildpro_get_option('color_ftitle').'; }';
        }

        if(buildpro_get_option('bg_bottom')){
        	$bg_bt = '.subfooter{ background: '.buildpro_get_option('bg_bottom').'; }';
        }
        if(buildpro_get_option('color_bottom')){
        	$color_bt = '.subfooter, .subfooter .social-icons i{ color: '.buildpro_get_option('color_bottom').'; }';
        }

        //Styling
        if(buildpro_get_option('bg_body')){
        	$bg_bd = 'body{ background-color: '.buildpro_get_option('bg_body').'; }';
        }


        $style_css .= buildpro_get_option('custom_css');
        $style_css .= $bg_top;
        $style_css .= $color_top;
        $style_css .= $bg_h;
        $style_css .= $color_m;
        $style_css .= $bg_sm;
        $style_css .= $color_sm;

        $style_css .= $logo_w;
        $style_css .= $logo_h;
        $style_css .= $logo_mar;
        $style_css .= $logo2_w;
        $style_css .= $logo2_h;
        $style_css .= $logo2_mar;

        $style_css .= $bgcms;
        $style_css .= $bgi_error;
        $style_css .= $bgc_error;
        $style_css .= $c_error;
        $style_css .= $h_error;

        $style_css .= $bg_ft;
        $style_css .= $bg_fimg;
        $style_css .= $color_ft;
        $style_css .= $color_fti;
        $style_css .= $bg_bt;
        $style_css .= $color_bt;
        
        $style_css .= $bg_bd;

        $style_css .= $bg_ph;
        $style_css .= $bg_hshop;

        if(! empty($style_css)){
			echo '<style type="text/css">'.$style_css.'</style>';
		}
    }
}
add_action('wp_head', 'buildpro_custom_frontend_style');