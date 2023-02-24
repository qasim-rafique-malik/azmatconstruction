<li <?php post_class(); ?>>
    <div class="post-content">
        <div class="post-image">
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                <?php $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
                <?php if($link_audio){ ?>  
                    <iframe style="width:100%" height="150" scrolling="no" frameborder="no" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
                <?php } ?>
            <?php } ?>
        </div>

        <div class="date-box">
            <div class="day"><?php the_time('d') ?></div>
            <div class="month"><?php the_time('M') ?></div>
        </div>

        <div class="post-text">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo buildpro_excerpt_length(); ?></p>
        </div>

        <a href="<?php the_permalink(); ?>" class="btn-more"><?php esc_html_e('Read More', 'buildpro'); ?></a>
    </div>
</li>