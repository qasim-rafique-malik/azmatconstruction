<?php
/**
 * The template for displaying archive portfolio.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package buildpro
 */

get_header(); ?>


<?php if(buildpro_get_option('page_header')) { ?>
<?php $img = buildpro_get_option( 'page_header_bg' ) ? buildpro_get_option( 'page_header_bg' ) : ''; ?>

<!-- subheader -->
    <section id="subheader" data-stellar-background-ratio=".3" style="background-image: url(<?php echo esc_url($img); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php esc_html_e('Portfolio', 'buildpro'); ?></h1>
                    <div class="small-border-deco"><span></span></div>
                    <?php if(buildpro_get_option('breadcrumb') && function_exists('bcn_display') && !is_front_page()) { ?>   
                        <div class="crumb">
                            <?php bcn_display(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->
<?php } ?>
<section class="no-top no-bottom">
	<div class="container">

        <!-- portfolio filter begin -->
        <div class="row">
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
                    <li class="pull-right"><a href="#" data-filter="*" class="selected"><?php echo esc_html__('All Projects','buildpro'); ?></a></li>
                </ul>
            </div>
        </div>
        <!-- portfolio filter close -->

    </div>

	<div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols">

        <?php 
  			$args = array(   
    			'post_type' => 'portfolio',   
    			'posts_per_page' => 12,	            
  			);  
  			$wp_query = new WP_Query($args);
  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
  			$cates = get_the_terms(get_the_ID(),'categories');
  			$cate_name ='';
  			$cate_slug = '';
      		foreach((array)$cates as $cate){
      			if(count($cates)>0){
        			$cate_name .= $cate->name.'<span>, </span>' ;
        			$cate_slug .= $cate->slug .' ';     
      			} 
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
</section>

<?php get_footer(); ?>