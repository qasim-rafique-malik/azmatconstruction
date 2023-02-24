<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package buildpro
 */
get_header(); ?>

<?php
    $bg = '';
    if ( ! function_exists('rwmb_meta') ) { 
        $bg = '';
    }else{
        $images = rwmb_meta('_cmb_bg_header', "type=image" ); 
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
<?php 
    $title   = buildpro_get_option('title_single') ? buildpro_get_option('title_single') : esc_html__('Single Blog', 'buildpro');
    $img     = buildpro_get_option( 'page_header_bg' ) ? buildpro_get_option( 'page_header_bg' ) : '';
?>

<?php $img_src = $bg ? $bg : $img; ?>
<!-- subheader -->
    <section id="subheader" data-stellar-background-ratio=".3" style="background-image: url(<?php echo esc_url($img_src); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo esc_html($title); ?></h1>
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

<?php while (have_posts()): the_post(); ?>

    <!-- Main Content -->
    <div id="content" class="<?php echo esc_attr( buildpro_get_option('post_layout') ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-list blog-single">
                        <?php                                                     
                            $format = get_post_format();
                            $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
                            $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
                        ?>
                        <div class="post-content">
                            <?php if($format == 'video') {  ?>
                                <div class="post-image">
                                    <div class="video-post">
                                        <iframe width="100%" height="315" src="<?php echo esc_url( $link_video ); ?>"></iframe>
                                    </div>
                                </div>
                            <?php }elseif($format == 'audio') { ?>
                                <div class="post-image">
                                    <iframe style="width:100%" height="150" scrolling="no" frameborder="no" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
                                </div>
                            <?php }elseif($format == 'gallery') { ?>
                                <div class="post-image">
                                    <div class="owl-carousel owl-theme blog-slide">
                                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
                                        <?php if($images){ ?>              
                                            <?php  foreach ( $images as $image ) {  ?>
                                                <?php $img = $image['full_url']; ?>
                                                <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div>
                                            <?php } ?>                
                                        <?php } ?>
                                    <?php } ?>
                                    </div>
                                </div>
                            <?php }elseif($format == 'image') { ?>
                                <div class="post-image">
                                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                                        <?php if($images){ ?>              
                                            <?php  foreach ( $images as $image ) {  ?>
                                                <?php $img = $image['full_url']; ?>
                                                <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                                            <?php } ?>                
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <div class="date-box">
                                <div class="day"><?php the_time('d') ?></div>
                                <div class="month"><?php the_time('M') ?></div>
                            </div>

                            <div class="post-text">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                                <div class="list-tags"></div>
                                <div class="post-info">
                                    <span>
                                        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                    </span> 
                                    <?php if(has_tag()) { ?>
                                    <span>
                                        <i class="fa fa-tag"></i> <?php the_tags('', ', ' ); ?>
                                    </span> 
                                    <?php } ?>
                                    <span>
                                        <i class="fa fa-comment"></i><span class="comments_number"> <?php comments_number( '0 '.esc_html__("comment","buildpro"), '1 '.esc_html__("comment","buildpro"), '% '.esc_html__("comments","buildpro") ); ?></span>
                                    </span> 
                                               
                              </div>
                                <?php
                                    wp_link_pages( array(
                                        'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'buildpro' ) . '</span>',
                                        'after'       => '</div>',
                                        'link_before' => '<span>',
                                        'link_after'  => '</span>',
                                        'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'buildpro' ) . ' </span>%',
                                        'separator'   => '<span class="screen-reader-text">, </span>',
                                    ) );
                                ?>
                            </div>

                        </div>
                        
                    </div>

                    <div class="comment-area">
                    <?php
                       if ( comments_open() || get_comments_number() ) :
                        comments_template();
                       endif;
                    ?>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="sidebar">
                        <?php get_sidebar();?>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>
    
<?php get_footer(); ?>