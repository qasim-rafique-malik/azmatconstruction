<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package buildpro
 */
get_header(); 

?>

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
    
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="blog-list">
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail() ?>
                    <?php the_content(); ?>
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
                    
                    <?php
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>      
                <?php endwhile; ?>
                </ul>

                <div class="text-center">
                    <?php echo buildpro_pagination(); ?>    
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

<?php get_footer(); ?>
