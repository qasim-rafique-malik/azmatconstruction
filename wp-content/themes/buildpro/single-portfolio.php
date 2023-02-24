<?php 
	get_header(); 
?>

<?php
    $bg = '';
    if ( ! function_exists('rwmb_meta') ) { 
        $bg = '';
    }else{
        $images = rwmb_meta('_cmb_bg_prjheader', "type=image" ); 
        if(!$images){
             $bg = '';
        } else {
             foreach ( $images as $image ) { 
                $bg = $image['full_url']; 
                break;
            }
        }
    }
   
?>

<?php if(buildpro_get_option('page_header')) { ?>
<?php $img = buildpro_get_option( 'page_header_bg' ) ? buildpro_get_option( 'page_header_bg' ) : ''; ?>

<?php $img_src = $bg ? $bg : $img; ?>
<!-- subheader -->
    <section id="subheader" data-stellar-background-ratio=".3" style="background-image: url(<?php echo esc_url($img_src); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
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

<?php
    $bg = '';
    if ( ! function_exists('rwmb_meta') ) { 
        $bg = '';
    }else{
        $images = rwmb_meta('_cmb_bg_prjheader', "type=image" ); 
        if(!$images){
             $bg = '';
        } else {
             foreach ( $images as $image ) { 
                $bg = $image['full_url']; 
                break;
            }
        }
    }
   
?>

<?php while (have_posts()): the_post(); ?>
    
    <?php the_content(); ?>
        
<?php endwhile; ?>

<?php if(buildpro_get_option('navigation')) { ?>
<section class="pt40 pb30" data-bgcolor="#eee">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="de-arrow-nav-set">
                    <?php 
                        the_post_navigation( array(
                            'next_text' => '<i class="arrow_left pull-left"></i>',
                            'prev_text' => '<i class="arrow_right pull-right"></i>',
                        ) ); 
                    ?>
                    <?php if(buildpro_get_option('project_link')) { ?><a href="<?php echo esc_url(buildpro_get_option('project_link')); ?>"><i class="icon_menu"></i></a><?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
    
<?php get_footer(); ?>