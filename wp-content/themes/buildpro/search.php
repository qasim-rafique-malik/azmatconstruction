<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                        <h1><?php printf( esc_html__( 'Search Results for: %s', 'buildpro' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                    <?php // If no content, include the "No posts found" template.
                        else : ?>
                                                       
                            <h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'buildpro' ); ?></h2>
                            
                            <div class="page-content">
                                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'buildpro' ); ?></p>
                                <div class="widget_search">
                                    <?php get_search_form(); ?>
                                </div>
                            </div><!-- .page-content -->
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