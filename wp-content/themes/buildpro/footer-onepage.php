<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buildpro
 */
?>

    <!-- footer begin -->
    <footer>
        <?php if(buildpro_get_option( 'bfooter' )) { ?>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php echo wp_kses( buildpro_get_option('copy_right'), wp_kses_allowed_html('post') ); ?>                    
                    </div>
                    <div class="col-md-6 text-right">
                        <?php $fsocials = buildpro_get_option( 'f_socials', array() ); ?>
                        <?php if($fsocials) { ?>
                            <div class="social-icons">
                                <?php foreach ( $fsocials as $fsocial ) { ?>
                                <a href="<?php echo esc_url($fsocial['link']); ?>"><i class="fa <?php echo esc_attr($fsocial['icon']); ?>" aria-hidden="true"></i></a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </footer>
    <!-- footer close -->

    <a href="#" id="back-to-top"></a>
    <?php if(buildpro_get_option('preload')){ ?>
    <div id="preloader">
        <div class="preloader1"></div>
    </div>
    <?php } ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
