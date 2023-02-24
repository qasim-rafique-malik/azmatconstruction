<?php
/**
 * The template for displaying archive service.
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
                    <h1><?php esc_html_e('Services', 'buildpro'); ?></h1>
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

<section>
    <div class="container">
        <div class="row">
        <?php           
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
            );
            $serv = new WP_Query($args);
            if($serv->have_posts()) : while($serv->have_posts()) : $serv->the_post();
        ?>

        <div class="service-item col-md-4 col-sm-6 mb30">
            <figure class="pic-hover hover-scale mb20">
                <span class="center-xy">
                    <a href="<?php the_permalink(); ?>"><i class="fa fa-plus btn-action btn-action-hide"></i></a>
                </span>
                <span class="bg-overlay"></span>
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive" alt="">
            </figure>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read_more"><?php echo esc_html__('read more', 'buildpro'); ?> <i class="fa fa-chevron-right id-color"></i></a>

        </div>

        <?php endwhile; endif ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>