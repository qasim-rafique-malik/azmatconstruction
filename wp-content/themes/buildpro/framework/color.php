<?php 

//Custom Style Frontend
if(!function_exists('buildpro_color_scheme')){
    function buildpro_color_scheme(){
        $main_color = '';

        //Main Color
        if(buildpro_get_option('main_color')){
            $main_color = 
            '
            .bg-color,
			section.bg-color,
			#mainmenu li li a:hover,
			#mainmenu ul li:hover > a,
			.price-row,
			.blog-list .date,
			.blog-read .date,
			.slider-info .text1,
			.btn-primary,
			.bg-id-color,
			.pagination > .active > a,
			.pagination li span,
			.pagination > .active > a:hover,
			.pagination > .active > span:hover,
			.pagination > .active > a:focus,
			.pagination > .active > span:focus,
			.dropcap,
			.fullwidthbanner-container a.btn,
			.feature-box-big-icon i,
			#testimonial-full,
			.icon-deco i,
			.blog-list .date-box .day,
			.bloglist .date-box .day,
			.feature-box-small-icon .border,
			.small-border,
			#jpreBar,
			.date-post,
			.team-list .small-border,
			.de-team-list .small-border,
			.btn-line:hover,a.btn-line:hover,
			.btn-line.hover,a.btn-line.hover,
			.owl-arrow span,
			.de-progress .progress-bar,
			#btn-close-x:hover,
			.box-fx .info,
			.de_testi blockquote:before,
			.btn-more,
			.widget .small-border,
			.product img:hover,
			#btn-search,
			.de_tab.timeline li.active .dot,
			.btn-id, .btn-custom,
			.tiny-border,
			#back-to-top, .form-submit #submit,
			.owl-theme .owl-controls .owl-page.active span,
			#subheader .small-border-deco span,
			.wpb_wrapper .widget_nav_menu li a:hover,
			.timeline .tl-block .tl-line,
			.de_tab.tab_style_2 .de_nav li.active span,
			.sidebar .widget_recent_entries .post-date,
			.owl-custom-nav .btn-next:before,
			.owl-custom-nav .btn-prev:before,
			.de_tab.tab_steps.style-2 .de_nav li.active span,
			.feature-box-small-icon.style-2 .number.bg-color,
			form.form-inline button:hover, .woocommerce-product-search button:hover,
			.woocommerce div.product form.cart .button,
			.woocommerce #review_form #respond .form-submit input, .woocommerce-message a.button,
			#add_payment_method .wc-proceed-to-checkout a.checkout-button, 
			.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
			.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
			.woocommerce #payment #place_order
			{
				background-color:'.buildpro_get_option('main_color').';
			}

			.feature-box i,
			#mainmenu li:hover > ul,
			#mainmenu li:hover > a,
			.date-box .day,
			.slider_text h1,
			.id-color,
			.pricing-box li h1,
			.title span,
			i.large:hover,
			.feature-box-small-icon-2 i,
			address span i,
			.pricing-dark .pricing-box li.price-row,
			.ratings i,
			#mainmenu a:hover,
			#mainmenu a.active,
			header.smaller #mainmenu a.active,
			.pricing-dark .pricing-box li.price-row,
			.dark .feature-box-small-icon i,
			a.btn-slider:after,
			.feature-box-small-icon i,
			.feature-box-small-icon .number,
			.box-icon-simple i,
			a.btn-line:after,
			.team-list .social a,
			.de_contact_info i,
			.dark .btn-line:hover:after, .dark a.btn-line:hover:after, .dark a.btn-line.hover:after,
			a.btn-text:after,
			.separator span  i,
			address span strong,
			.de_tab.tab_steps .de_nav li span:hover,
			.de_testi_by,
			.pf_text,
			.widget_tags li a,
			.dark .btn-line:after, .dark  a.btn-line:after,
			.crumb a, .woocommerce .star-rating span:before,
			.btn-right:after,
			.btn-left:before,
			#mainmenu li a:after,
			header .info .social i:hover,
			#back-to-top:hover:before,
			.wpb_wrapper .widget_nav_menu li.current-menu-item,
			.wpb_wrapper .widget_nav_menu li.current-menu-item a:after,
			.testimonial-list:before,
			.woocommerce p.stars a, #mainmenu .current-menu-item > a
			{
				color:'.buildpro_get_option('main_color').';
			}

			.feature-box i,
			.pagination > .active > a,
			.pagination > .active > span,
			.pagination li span:hover,
			.pagination > .active > a:hover,
			.pagination > .active > span:hover,
			.pagination > .active > a:focus,
			.pagination > .active > span:focus
			.feature-box-big-icon i:after,
			.social-icons i
			.btn-line:hover,a.btn-line:hover,
			.btn-line.hover,a.btn-line.hover,
			.product img:hover,
			#contact_form input[type=text]:focus, #contact_form input[type=email]:focus, #contact_form input[type=tel]:focus,#contact_form textarea:focus, #search:focus,
			#contact_form .de_light input[type=text]:focus, #contact_form .de_light input[type=email]:focus, #contact_form .de_light input[type=tel]:focus, #contact_form .de_lighttextarea:focus, #contact_form .de_light #search:focus,
			.form-transparent input[type=text]:focus, .form-transparent textarea:focus, .form-transparent input[type=email]:focus,
			.de_tab.tab_steps.style-2 .de_nav li.active span
			{

				border-color:'.buildpro_get_option('main_color').';
			}

			.box-fx .inner,
			.dark .box-fx .inner,
			.blog-list img,
			.arrow-up
			{
				border-bottom-color:'.buildpro_get_option('main_color').';
			}

			.arrow-down{
				border-top-color:'.buildpro_get_option('main_color').';
			}

			.callbacks_nav {
				background-color:'.buildpro_get_option('main_color').';
			}


			.de_tab .de_nav li span {
			border-top: 3px solid '.buildpro_get_option('main_color').';
			}

			.feature-box-big-icon i:after {
			border-color: '.buildpro_get_option('main_color').' transparent;
			}

			.de_review li.active img{
				border:solid 4px '.buildpro_get_option('main_color').';
			}

			.preloader1{
				border-top-color:'.buildpro_get_option('main_color').';
			}

			blockquote{
			border-left-color:'.buildpro_get_option('main_color').';
			}
			';
        }

        if(! empty($main_color)){
			echo '<style type="text/css">'.$main_color.'</style>';
		}
    }
}
add_action('wp_head', 'buildpro_color_scheme');