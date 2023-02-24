<?php $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>

<li <?php post_class(); ?>>
    <div class="post-content">
        <div class="post-image">
            <div class="video-post">
                <iframe width="100%" height="315" src="<?php echo esc_url( $link_video ); ?>"></iframe>
            </div>
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