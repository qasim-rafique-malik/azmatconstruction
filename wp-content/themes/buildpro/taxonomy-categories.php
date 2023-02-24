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

<section>

	<div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols gallery_border">



        <?php 

  			while (have_posts()) : the_post(); 

  			$image = wp_get_attachment_url(get_post_thumbnail_id());

  			$video = get_post_meta(get_the_ID(),'_cmb_popup_video', true);

		?>

        <div class="item">

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