<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package buildpro
 */

get_header(); ?>
    
    <?php if(buildpro_get_option('page_header')) { ?>
    <!-- subheader -->
        <section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_archive_title(); ?></h1>
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
    <!-- Main Content -->
    <div id="content" class="<?php echo esc_attr( buildpro_get_option('blog_layout') ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="blog-list">
                    <?php if( have_posts() ) : ?>
                        <?php 
                            while (have_posts()) : the_post();
                                get_template_part( 'content', get_post_format() ) ;
                            endwhile;
                        ?>
                    <?php endif; ?>
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