<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package buildpro
 */

get_header(); ?>
  
  <section class="no-padding bg-error">
    <div class="container">
      <div class="warp-404">
        <div class="warp-404-inner">
          <h1><?php esc_html_e('404 ERROR','buildpro'); ?></h1>
          <p class="id-color"><?php esc_html_e('Oops. You have encountered an error.','buildpro'); ?></p>
          <p><?php esc_html_e('It appears the page your were looking for does not exist. Sorry about that.','buildpro'); ?></p>
          <div class="search-404">
              <p><?php esc_html_e('Try to search something...','buildpro'); ?></p>
              <?php get_search_form(); ?>
          </div>
          <p><?php esc_html_e('or','buildpro'); ?></p>
          <p><a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-fx btn-line-black"><?php esc_html_e(' GO BACK TO HOME','buildpro'); ?></a></p>
        </div>
      </div>
    </div>
  </section>
	
<?php get_footer(); ?>
