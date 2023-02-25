<?php 

// Home Parallax
add_shortcode('homepr', 'homepr_func');
function homepr_func($atts, $content = null){
	extract(shortcode_atts(array(
		'btext'		=>	'',
		'vbtext'	=>	'',
		'ctext'		=>	'',
		'slide'		=>	'',	
		'btn'		=>	'',
		'link'		=>	'',
		'style'		=>	'style1',
	), $atts));
		$url 	= vc_build_link( $btn );
		$slides = (array) vc_param_group_parse_atts( $slide );
	ob_start(); ?>

	<?php if($style == 'style1') { ?>
	<div class="center-y fadeScroll text-center relative text-light" data-scroll-speed="1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="spacer-double"></div>
                    <?php if($btext) { ?>
                    <h1 class="big wow fadeInUp" data-wow-delay=".5s"><?php echo htmlspecialchars_decode($btext); ?></h1>
                    <br>
                    <?php } ?>
                    <?php if($vbtext) { ?>
                    <h1 class="very-big wow fadeInUp" data-wow-delay=".5s"><?php echo htmlspecialchars_decode($vbtext); ?><span class="id-color">.</span></h1>
                    <br>
                    <?php } ?>
                    <div class="h2_title wow fadeInUp" data-wow-delay=".8s">
                        <div class="text-slider id-color">
                        	<?php foreach ( $slides as $sli ) { if($sli) { ?>
                            <span class="text-item"><?php echo esc_html($sli['text']); ?></span>
                            <?php } } ?>
                        </div>
                    </div>
                    <div class="wow fadeInUp font13" data-wow-delay="1.1s">
                        <?php echo htmlspecialchars_decode($content); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="center-y">
	    <div class="spacer-double"></div>
		<div class="spacer-double"></div>
	    <div class="teaser-text id-color">
	        <?php echo htmlspecialchars_decode($ctext); ?>
	    </div>
	    <div class="spacer-single"></div>
	    <div class="text-slider med-text border-deco">
	    	<?php foreach ( $slides as $sli ) { if($sli) { ?>
	        <div class="text-item"><?php echo esc_html($sli['text']); ?><span class="id-color">.</span></div>
	        <?php } } ?>
	    </div>
	    <div class="spacer-single"></div>
	    <div class="spacer-half"></div>
	    <?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
			echo '<a class="btn-slider scroll-to" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">'. esc_attr( $url['title'] ).'</a>';
		} ?>
	</div>
    <?php } ?>

    <?php if($link) { ?>
    <a href="<?php echo esc_url($link); ?>" class="scroll-to">
        <span class="mouse fadeScroll relative" data-scroll-speed="2">
            <span class="scroll"></span>
        </span>
    </a>
    <?php } ?>
    	
<?php
    return ob_get_clean();
}


// Background Video
add_shortcode('bgvideo', 'bgvideo_func');
function bgvideo_func($atts, $content = null){
	extract(shortcode_atts(array(
		'slide'		=>	'',
		'video'		=>	'',	
		'link'		=>	'',
	), $atts));
	$slides = (array) vc_param_group_parse_atts( $slide );
	ob_start(); ?>

	<div class="de-video-container">
		<div class="de-video-content">
            <div class="text-center">
                <div class="text-slider med-text border-deco">
                	<?php foreach ( $slides as $sli ) { if($sli) { ?>
                    <span class="text-item"><?php echo esc_html($sli['text']); ?><span class="id-color">.</span></span>
                    <?php } } ?>
                </div>
                <div class="spacer-single"></div>
            </div>
        </div>
        <div class="de-video-overlay"></div>
        <video autoplay="" loop="" muted="">
            <source src="<?php echo esc_url($video); ?>" type="video/mp4" />
        </video>

    </div>
    <?php if($link) { ?>
    <a href="<?php echo esc_url($link); ?>" class="scroll-to">
        <span class="mouse fadeScroll relative" data-scroll-speed="2">
            <span class="scroll"></span>
        </span>
    </a>
    <?php } ?>
    	
<?php
    return ob_get_clean();
}

// Button
add_shortcode('otbutton','otbutton_func');
function otbutton_func($atts, $content = null){
	extract(shortcode_atts(array(
		'btn'		=>	'',
		'float'		=>	'',
		'style'		=>	'btn-line-black',
	), $atts));
		$url 	= vc_build_link( $btn );
		$flo    = '';
		if($float){ $flo = 'pull-right'; }
	ob_start(); 
?>

    <?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
		echo '<a class="btn btn-fx' . esc_attr(' '.$style) . esc_attr(' '.$flo) . '" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) .'</a>';
	} ?>
  	
<?php
    return ob_get_clean();
}

// Icon box
add_shortcode('servicesbox', 'servicesbox_func');
function servicesbox_func($atts, $content = null){
	extract(shortcode_atts(array(
		'icon'		=>	'',
		'num'		=>	'',
		'title'		=>	'',	
		'light'		=>	'',
		'style'		=>	'icon',
	), $atts));
	ob_start(); ?>

	<?php if($style == 'icon') { ?>
	<div class="feature-box-small-icon <?php if($light) echo 'text-light'; ?>">
        <span class="icon">
        	<i class="<?php echo esc_attr($icon); ?> id-color"></i>
        </span>
        <div class="text">
            <h3><?php echo htmlspecialchars_decode($title); ?></h3>
            <?php echo htmlspecialchars_decode($content); ?>
        </div>
    </div>
    <?php }else{ ?>
    <div class="feature-box-small-icon <?php if($light) echo 'text-light'; ?>">
        <div class="inner">
            <span class="number"><?php echo esc_html($num); ?></span>
            <div class="text">
                <h3><?php echo htmlspecialchars_decode($title); ?></h3>
                <?php echo htmlspecialchars_decode($content); ?>
            </div>
        </div>
    </div>	
    <?php } ?>

<?php
    return ob_get_clean();
}


// Member Team
add_shortcode('member','member_func');
function member_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'name'		=>	'',
		'btn'		=>	'',
		'job'		=>	'',
		'social'	=>	'',
	), $atts));
		$img 	 = wp_get_attachment_image_src($photo,'full');
		$img 	 = $img[0];
		$url 	 = vc_build_link( $btn );
		$socials = (array) vc_param_group_parse_atts( $social );
	ob_start(); 
?>
	<div class="profile_pic">
        <figure class="pic-hover hover-scale mb30">
            <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
        </figure>

        <h3><?php echo htmlspecialchars_decode($name); ?></h3>
        <span class="subtitle"><?php echo htmlspecialchars_decode($job); ?></span>
        <span class="tiny-border"></span>
        <?php echo htmlspecialchars_decode($content); ?>
        
		<ul class="social-team">
			<?php foreach ( $socials as $soc ) : if($soc) : ?>
				<li>
					<a href="<?php echo esc_url($soc['link']); ?>"><i class="<?php echo esc_attr($soc['icon']); ?>"></i></a>
				</li>
			<?php endif; endforeach; ?>
		</ul>

        <?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
			echo '<a class="read_more mt10" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">'. esc_attr( $url['title'] ).' <i class="fa fa-chevron-right id-color"></i></a>';
		} ?>
    </div>

<?php
    return ob_get_clean();
}

//History
add_shortcode('history','history_func');
function history_func($atts, $content = null){
	extract(shortcode_atts(array(
		'his'		=>	'',
		'ani'		=>	'',
		'light'		=>	'',
	), $atts));
		$hist = (array) vc_param_group_parse_atts( $his );
	ob_start(); 
?>
	<div class="timeline <?php if($light) echo 'text-light'; ?>">
	<?php $i = 0; foreach ( $hist as $his ) { ?>
        <div class="tl-block <?php if($ani) echo 'wow fadeInUp'; ?>" data-wow-delay=".<?php echo esc_attr($i); ?>s">
            <div class="tl-time">
                <h3><?php echo esc_html($his['year']); ?></h3>
            </div>
            <div class="tl-bar">
                <div class="tl-line"></div>
            </div>
            <div class="tl-message">
                <div class="tl-icon">&nbsp;</div>
                <div class="tl-main">
                    <h3><?php echo htmlspecialchars_decode($his['name']); ?></h3>
                    <?php echo htmlspecialchars_decode($his['des']); ?>
                </div>
            </div>
        </div>
        <?php $i++; } ?>
    </div>

<?php
    return ob_get_clean();
}

//Popup  
add_shortcode('popupvideo','popupvideo_func');
function popupvideo_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'video'		=>	'',
		'show'		=>	'',
	), $atts));
	$img 	 = wp_get_attachment_image_src($photo,'full');
	$img 	 = $img[0];
	ob_start(); 
?>
	<figure class="pic-hover hover-scale">
        <span class="center-xy">
            <a class="<?php if($video) echo 'popup-vimeo'; else echo 'image-popup' ?>" href="<?php if($video) echo esc_url($video);else echo esc_url($img); ?>">
                <i class="fa fa-<?php if($video) echo 'play btn-play'; else echo 'image' ?> btn-action <?php if(!$show) echo 'btn-action-hide'; ?>"></i>
            </a>
        </span>
        <span class="bg-overlay"></span>
        <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
    </figure>

<?php
    return ob_get_clean();
}

// Service Box
add_shortcode('iconbox', 'iconbox_func');
function iconbox_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'video'		=>	'',
		'title'		=>	'',	
		'btn'		=>	'',
		'link'		=>	'',
	), $atts));
	$url 	= vc_build_link( $btn );
	$img 	 = wp_get_attachment_image_src($photo,'full');
	$img 	 = isset($img[0])?$img[0]:'';
	ob_start(); ?>

	<figure class="pic-hover hover-scale">
        <span class="center-xy">
        	<?php if(!$link) { ?>
            <a class="<?php if($video) echo 'popup-vimeo'; else echo 'image-popup' ?>" href="<?php if($video) echo esc_url($video);else echo esc_url($img); ?>">
                <i class="fa fa-<?php if($video) echo 'play btn-play'; else echo 'image' ?> btn-action btn-action-hide"></i>
            </a>
            <?php }?>
        </span>
        <?php if($link) { ?><a href="<?php echo esc_url($link); ?>"><?php } ?><span class="bg-overlay"></span><?php if($link) { ?></a><?php } ?>
        <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
    </figure>

    <h3 class="<?php if($img) echo 'mt20'; ?>"><?php echo htmlspecialchars_decode($title); ?></h3>
    <p>
        <?php echo htmlspecialchars_decode($content); ?>
	<br>
		<?php if ( strlen( $btn ) > 0 && strlen( $url['url'] ) > 0 ) {
			echo '<a class="read_more mt10" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ). ' <i class="fa fa-chevron-right id-color"></i></a>';
		} ?>
    </p>
    	
<?php
    return ob_get_clean();
}


// List Services
add_shortcode('listserv','listserv_func');
function listserv_func($atts, $content = null){
	extract(shortcode_atts(array(
		'num'		=>	'-1',
		'col'		=>	'',
		'btn'		=>	'',
	), $atts));
	if($col == '2'){
		$c = 'col-sm-6';
	}elseif($col == '4'){
		$c = 'col-md-3 col-sm-6';
	}else{
		$c = 'col-md-4 col-sm-6';
	}
	ob_start(); 
?>
	<div class="row">
	<?php			
		$args = array(
			'post_type' => 'service',
			'posts_per_page' => $num,
		);
		$serv = new WP_Query($args);
		if($serv->have_posts()) : while($serv->have_posts()) : $serv->the_post();
	?>

	<div class="service-item <?php echo esc_attr($c); ?> mb30">
        <figure class="pic-hover hover-scale mb20">
            <span class="center-xy">
                <a href="<?php the_permalink(); ?>"><i class="fa fa-plus btn-action btn-action-hide"></i></a>
            </span>
            <span class="bg-overlay"></span>
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive" alt="">
        </figure>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <?php if($btn) { ?><a href="<?php the_permalink(); ?>" class="read_more"><?php echo esc_html($btn); ?> <i class="fa fa-chevron-right id-color"></i></a><?php } ?>

    </div>

	<?php endwhile; endif ?>
	</div>
  	
<?php
    return ob_get_clean();
}

// Process
add_shortcode('process', 'process_func');
function process_func($atts, $content = null){
	extract(shortcode_atts(array(
		'proce'		=>	'',
		'dark'		=>	'',
	), $atts));
	$proces = (array) vc_param_group_parse_atts( $proce );
	ob_start(); ?>

	<div class="de_tab tab_steps <?php if($dark) echo 'dark'; ?> style-2">

        <ul class="de_nav">
        	<?php $i = 1; foreach ( $proces as $proc ) { ?>
            <li class="<?php if($i == 1) echo 'active'; ?>">
            	<span><?php echo esc_html($proc['title']); ?></span><div class="v-border"></div>
            </li>
            <?php $i++; } ?>
        </ul>

        <div class="de_tab_content text-light">
        	<?php  $j = 1; foreach ( $proces as $proc ) { ?>
            <div id="tab<?php echo esc_attr($j); ?>">
                <?php echo htmlspecialchars_decode($proc['des']); ?>
            </div>
            <?php $j++; } ?>
        </div>

    </div>

<?php
    return ob_get_clean();
}

// Testimonial Silder
add_shortcode('testslide','testslide_func');
function testslide_func($atts, $content = null){
	extract(shortcode_atts(array(
		'testi'		=>	'',
		'light'		=>	'',
	), $atts));
	$test = (array) vc_param_group_parse_atts( $testi );
	ob_start(); 
?>

	<div class="testimonial-list wow fadeIn <?php if($light) echo 'text-light'; ?>" data-wow-delay=".25s">
		<?php foreach ( $test as $tes ) { ?>
        <div class="testi-item">
        	<?php echo htmlspecialchars_decode($tes['text']); ?>
			<span><?php echo esc_html($tes['name']); ?></span>
        </div>
        <?php } ?>
    </div>

<?php
    return ob_get_clean();
}


// Call To Action
add_shortcode('call_to', 'call_to_func');
function call_to_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>	'',
		'linkbox'	=>	'',
		'light'		=>	'',
	), $atts));
		$url 	= vc_build_link( $linkbox );
		$clas = 'btn-line-black';
		if($light){
			$clas = 'btn-line-white';
		}
	ob_start(); ?>

	<div class="row call-to-action <?php if($light) echo 'text-light'; ?>">
		<div class="col-md-8">
	        <h3 class="mt10"><?php echo htmlspecialchars_decode($title); ?></h3>
	    </div>
	    <div class="col-md-4 text-right">
	    	<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="btn '.$clas.' btn-fx" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
			} ?>
	    </div>
    </div>

<?php
    return ob_get_clean();
}


// Lastest Blog
add_shortcode('lastest_blog','lastest_blog_func');
function lastest_blog_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>	'6',
		'rm'		=>	'',
		'cols'		=>	'3',
	), $atts));

	ob_start(); 
?>
	<ul id="blog-carousel" class="blog-list blog-snippet">
	<?php		
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => $number,
		);
		$blogpost = new WP_Query($args);
		if($blogpost->have_posts()) : while($blogpost->have_posts()) : $blogpost->the_post();
		$format = get_post_format();
	?>
	
	<li class="item">
	    <div class="post-content">
	        <div class="date-box">
	            <div class="day"><?php the_time('d') ?></div>
	            <div class="month"><?php the_time('M') ?></div>
	        </div>

	        <div class="post-text">
	            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	            <p>
	                <?php echo buildpro_excerpt(15); ?>
					<br>
	                <a href="<?php the_permalink(); ?>" class="read_more mt10"><?php echo esc_html($rm); ?> <i class="fa fa-chevron-right id-color"></i></a>
	            </p>
	        </div>

	    </div>
	</li>

	<?php endwhile; wp_reset_postdata(); endif; ?>
	</ul>

	<script>
		(function($) { "use strict";

			$("#blog-carousel").owlCarousel({
				items: <?php echo esc_js($cols); ?>,
				itemsDesktop      : [1199,<?php echo esc_js($cols); ?>],
			    itemsDesktopSmall     : [979,<?php echo esc_js($cols); ?> - 1],
			    itemsTablet       : [768,1],
			    itemsMobile       : [479,1],
				navigation: false,
				pagination: true
			}); 

		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Portfolio Filter
add_shortcode('portfoliof', 'portfoliof_func');
function portfoliof_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'All Projects',
		'num'		=> 	'12',
		'col'   	=> 	'3',
		'popup'		=>	'',
		'gutter'	=>	'',
		'gw'		=>	'10',
		'filter'	=>	'default',	
	), $atts));
	$gw = $gw/2;
	ob_start(); ?>

	<?php if($filter != 'none') { ?>
	<div class="container project-filter">

        <!-- portfolio filter begin -->
        <div class="row">
        	<?php if($filter == 'center') { ?>
            <div class="col-md-12 text-center">
                <ul id="filters">
                    <li><a href="#" data-filter="*" class="selected"><?php echo esc_html($all); ?></a></li>
                	<?php 
			  			$categories = get_terms('categories');
			   			foreach( (array)$categories as $categorie){
			    			$cat_name = $categorie->name;
			    			$cat_slug = $categorie->slug;
					?>
			      	<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
			    	<?php } ?>
                </ul>
            </div>
            <?php }else{ ?>
            <div class="col-md-12">
                <ul id="filters">
                	<?php 
			  			$categories = get_terms('categories');
			   			foreach( (array)$categories as $categorie){
			    			$cat_name = $categorie->name;
			    			$cat_slug = $categorie->slug;
					?>
			      	<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
			    	<?php } ?>
                    <li class="pull-right"><a href="#" data-filter="*" class="selected"><?php echo esc_html($all); ?></a></li>
                </ul>
            </div>
            <?php } ?>
        </div>
        <!-- portfolio filter close -->

    </div>
    <?php } ?>

	<div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_<?php echo esc_attr($col); ?>_cols <?php if($gutter) echo 'gallery_border'; if($popup) echo ' grid_gallery'; ?>">

        <?php 
  			$args = array(   
    			'post_type' => 'portfolio',   
    			'posts_per_page' => $num,	            
  			);  
  			$wp_query = new WP_Query($args);
  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
  			$cates = get_the_terms(get_the_ID(),'categories');
  			$cate_name ='';
  			$cate_slug = '';
      		foreach((array)$cates as $cate){
    			$cate_name .= $cate->name.'<span>, </span>' ;
    			$cate_slug .= $cate->slug .' ';     
  			}
  			$image = wp_get_attachment_url(get_post_thumbnail_id());
  			$video = get_post_meta(get_the_ID(),'_cmb_popup_video', true);
		?>
        <div class="item <?php echo esc_attr($cate_slug); ?>">
            <div class="picframe">
            	<?php if($popup) { ?>
            	<a class="<?php if($video) echo 'popup-youtube'; else echo 'image-popup-gallery'; ?>" href="<?php if($video) echo esc_url($video); else echo esc_url($image); ?>">
            	<?php }else{ ?>
                <a href="<?php the_permalink(); ?>">
                <?php } ?>
                    <span class="overlay">
                        <span class="pf_text">
                            <span class="project-name"><?php the_title(); ?></span>
                        </span>
                    </span>
                </a>
                <img src="<?php echo esc_url($image); ?>" alt="" />
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>

    </div>

    <?php if($gw) { ?>
    <style type="text/css">
	    .pf_full_width.gallery_border .picframe,
	    .gallery_border{
	    	margin: <?php echo esc_attr($gw); ?>px;
	    }
	    .gallery_border{
	    	margin-top: -<?php echo esc_attr($gw); ?>px;
	    }
	    .container .gallery_border{
	    	margin-left: -<?php echo esc_attr($gw); ?>px;;
	    	margin-right: -<?php echo esc_attr($gw); ?>px;;
	    }
    </style>
    <?php } ?>

<?php
    return ob_get_clean();
}


// Latest Projects 
add_shortcode('latestprj','latestprj_func');
function latestprj_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>	'-1',
		'title'		=>	'',
		'visible'	=>	'4',
	), $atts));

	ob_start(); 
?>

	<div class="owl-custom-nav">
        <a class="btn-next"></a>
        <a class="btn-prev"></a>
    </div>

    <div id="gallery-carousel-4" class="owl-slide carousel-style-2">
    	<?php 
  			$args = array(   
    			'post_type' => 'portfolio',   
    			'posts_per_page' => $number,	            
  			);  
  			$wp_query = new WP_Query($args);
  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
  			$image = wp_get_attachment_url(get_post_thumbnail_id());
		?>
        <div class="carousel-item">
            <div class="picframe">
                <a href="<?php the_permalink(); ?>">
                    <span class="overlay-v"></span>
                </a>
                <img src="<?php echo esc_url($image); ?>" alt="" />
            </div>
            <?php if(!$title) { ?>
            <span class="pf_text">
                <span class="project-name"><?php the_title(); ?></span>
            </span>
            <?php } ?>
        </div>
    	<?php endwhile; ?>
    </div>

    <script>
		(function($) { "use strict";
			jQuery("#gallery-carousel-4").owlCarousel({
				items: <?php echo esc_js($visible); ?>,
				navigation: false,
				pagination: false
			});
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Related Projects
add_shortcode('projrelated','projrelated_func');
function projrelated_func($atts, $content = null){
	extract(shortcode_atts(array(
		'idpost'	=>	'',
		'idcat'		=>	'',
		'title'		=>	'Related Projects',
		'col'		=>	'4',
	), $atts));

	ob_start(); 
?>

	<h3><?php echo htmlspecialchars_decode($title); ?><span class="tiny-border"></span></h3>
	<div class="spacer-half"></div>
	<div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_<?php echo esc_attr($col); ?>_cols">
		<?php 
		if($idpost){
			$args = array(
				'post_type' => 'portfolio',
			    'post__in' => explode(',',$idpost)
			);
		}else{
			$args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'categories',
						'field' => 'slug',
						'terms' => explode(',',$idcat)
					),
				),
				'post_type' => 'portfolio',
				'posts_per_page' => 20
			);
		}
		
		$wp_query = new WP_Query($args);					
		while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

		?>
        <div class="item residential">
            <div class="picframe">
                <a href="<?php the_permalink(); ?>">
                    <span class="overlay">
                        <span class="pf_text">
                            <span class="project-name"><?php the_title(); ?></span>
                        </span>
                    </span>
                </a>
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="" />
            </div>
        </div>
    	<?php endwhile; wp_reset_postdata();?>
    </div>

<?php
    return ob_get_clean();
}


// Gallery
add_shortcode('otgallery','otgallery_func');
function otgallery_func($atts, $content = null){
	extract(shortcode_atts(array(
		'num'		=>	'12',
		'name'		=>	'',
		'gallery'	=>	'',
		'style'		=>	's1',
	), $atts));
	$img = wp_get_attachment_image_src($gallery,'full');
	$img = $img[0];	
	ob_start(); 
?>
	
	<?php if($style == 's1') { ?>
	<div id="project-img-carousel" class="row zoom-gallery">
		<?php 
			$img_ids = explode(",",$gallery);
			foreach( $img_ids AS $img_id ){
			$meta = wp_prepare_attachment_for_js($img_id);
			$caption = $meta['caption'];
			$title = $meta['title'];	
			$description = $meta['description'];
			$image_src = wp_get_attachment_image_src($img_id,'');
		?>
        <div class="col-md-<?php echo esc_attr($num); ?>">
            <figure class="pic-hover">
                <a href="<?php echo esc_url($image_src[0]); ?>">
                    <span class="center-xy">
                    	<?php if($name) { ?>
                    	<span class="gtitle"><?php echo esc_html($title); ?></span>
                    	<?php }else{ ?>
                        <i class="fa fa-search btn-action btn-action-hide"></i>
                    	<?php } ?>
                    </span>
                    <span class="bg-overlay"></span>
                    <img src="<?php echo esc_url($image_src[0]); ?>" class="img-responsive" alt="">
                </a>
            </figure>
        </div>
        <?php } ?>
    </div>

    <?php }else{ ?>

    <div class="owl-custom-nav">
        <a class="btn-next"></a>
        <a class="btn-prev"></a>
    </div>
    <div class="project-slide">
    	<?php 
			$img_ids = explode(",",$gallery);
			foreach( $img_ids AS $img_id ){
			$image_src = wp_get_attachment_image_src($img_id,''); 
		?>
        <img src="<?php echo esc_url($image_src[0]); ?>" class="img-responsive" alt="">
        <?php } ?>
    </div>
    <?php } ?>
  	
<?php
    return ob_get_clean();
}



// Our Facts
add_shortcode('facts','facts_func');
function facts_func($atts, $content = null){
	extract(shortcode_atts(array(
		'num'		=>	'',
		'icon'		=>	'',
		'title'		=>	'',
		'ico'		=>	'',
	), $atts));
		
	ob_start(); 
?>
	
	<div class="de_count">
        <?php if($icon) { ?><i class="<?php echo esc_attr($icon); if(!$ico) echo ' id-color'; ?>" data-animation="fadeInDown" data-delay="0"></i><?php } ?>
        <h3 class="timer" data-to="<?php echo esc_html($num); ?>" data-speed="2500">0</h3>
        <span><?php echo htmlspecialchars_decode($title); ?></span>
    </div>
  	
<?php
    return ob_get_clean();
}

//Skills
add_shortcode('skills','skills_func');
function skills_func($atts, $content = null){
	extract(shortcode_atts(array(
		'skill'		=>	'',
		'light'		=>	'',
	), $atts));
	$skil = (array) vc_param_group_parse_atts( $skill );
	ob_start(); 
?>
	<?php foreach ( $skil as $ski ) { ?>
	<div class="skill-bar <?php if($light) echo 'text-light'; ?>">
        <h3><?php echo htmlspecialchars_decode($ski['title']); ?></h3>
        <div class="de-progress">
            <div class="progress-bar" data-value="<?php echo esc_attr($ski['per']); ?>">
            </div>
        </div>
    </div>
    <?php } ?>

<?php
    return ob_get_clean();
}



// Logo Clients
add_shortcode('clients','clients_func');
function clients_func($atts, $content = null){
	extract(shortcode_atts(array(
		'gallery'		=> 	'',
		'speed'		  	=>	'6000',	
		'num'		  	=>	'6',	
	), $atts));
		$img = wp_get_attachment_image_src($gallery,'full');
		$img = $img[0];
		$id = uniqid( 'partner-' );
	ob_start(); ?>

        <div id="<?php echo esc_attr($id); ?>" class="owl-partner">
        	<?php 
				$img_ids = explode(",",$gallery);
				foreach( $img_ids AS $img_id ){
				$meta = wp_prepare_attachment_for_js($img_id);
				$caption = $meta['caption'];
				$title = $meta['title'];	
				$description = $meta['description'];
				$image_src = wp_get_attachment_image_src($img_id,''); 
			?>
			<div class="partner-item">
				<?php if($caption){ ?><a href="<?php echo esc_url($caption); ?>" target="_blank" ><?php } ?>
            		<img src="<?php echo esc_url( $image_src[0] ); ?>" alt="">
            	<?php if($caption){ ?></a><?php } ?>
			</div>
			<?php } ?>
		</div>

		<script>
			(function($) { "use strict";	

				$( "#<?php echo esc_js($id); ?>" ).owlCarousel({

    				autoPlay: <?php echo esc_js($speed); ?>,
		            items : <?php echo esc_js($num); ?>,
		            responsiveClass:true,
		            responsive : {
		            // breakpoint from 0 up
		            0 : {
		               items:1,
		            },
		            // breakpoint from 480 up
		            480 : {
		               items:1,
		            },
		            // breakpoint from 768 up
		            768 : {
		                items:3,
		            },
		            992 : {
		                items:3,
		            },
		            1440 : {
		                items:<?php echo esc_js($num); ?> - 1,
		            },
		            1920 : {
		                items:<?php echo esc_js($num); ?>,
		            }
		        },
		            dots:false,
		            nav:false,
		            animateOut: 'fadeOut',
		            animateIn: 'fadeIn',
		        }); 

			})(jQuery); 
		</script>

<?php
    return ob_get_clean();	
}

// Contact Tabs
add_shortcode('ctinfo','ctinfo_func');
function ctinfo_func($atts, $content = null){
	extract(shortcode_atts(array(
		'info'	=>	'',
	), $atts));
	$cinfo = (array) vc_param_group_parse_atts( $info );
	ob_start(); 
?>
	<div class="de_tab tab_style_2">
		<?php if( !empty($cinfo[1])) { ?>
        <ul class="de_nav">
        	<?php $i = 0; foreach ( $cinfo as $data ) { ?>
            <li class="<?php if($i==0) echo 'active'; ?>" data-wow-delay="0s">
            	<span><?php echo esc_html($data['name']); ?></span><div class="v-border"></div>
            </li>
            <?php $i++; } ?>
        </ul>
        <?php } ?>
        <div class="de_tab_content tc_style-1">
        	<?php $i = 0; foreach ( $cinfo as $data ) { ?>
            <div id="tab<?php echo esc_attr($i); ?>">
                <div class="row">
                    <div class="col-md-6">
                    	<?php echo htmlspecialchars_decode($data['map']); ?>
                    </div>
                    <div class="col-md-6">
                    	<?php echo htmlspecialchars_decode($data['content']); ?>
                    </div>
                </div>
            </div>
            <?php $i++; } ?>
        </div>
    </div>

<?php
    return ob_get_clean();
}