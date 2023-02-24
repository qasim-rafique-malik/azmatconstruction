<li <?php post_class(); ?>>
    <div class="post-content">
        <div class="post-image">
            <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
            </a>
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