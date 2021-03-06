<?php global $authordata; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('archive-article row h-entry') ); ?>>

    <?php if( is_sticky() ) { ?>
        <div class="bookmark-text sr-only"><?php _e('Featured Post', 'nano-progga'); ?></div>
    <?php } ?>

    <h2 class="entry-title row p-name">
        <span class="fa fa-link"></span>
        <a title="<?php printf( __('Permalink to %s', 'nano-progga'), the_title_attribute('echo=0') ); ?>" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <div class="entry-content row e-content">

        <?php the_content( __( 'Read More <span class="meta-nav">&rarr;</span>', 'nano-progga' ) ); ?>

        <div class="clearfix"></div>
        <?php
        wp_link_pages( array(
                'before'      => '<div class="page-links">' . __( 'Pages: ', 'nano-progga' ),
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
            ) );
        ?>
        
    </div> <!-- .entry-content -->

    <div class="entry-meta entry-meta-top row">
        <?php
        // No need to display same data in the author archive
        if( !is_author() ) :
        ?>
            <span class="entry-meta-item author vcard">
                <span class="fa fa-user" title="<?php _e( 'Author', 'nano-progga' ); ?>"></span>
                <a class="url fn n" href="<?php echo get_author_posts_url( $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'nano-progga' ), $authordata->display_name ); ?>">
                    <?php the_author(); ?>
                </a>
            </span>

            <span class="seperator-v">|</span>
        <?php endif; ?>

        <span class="entry-meta-item entry-date">
            <span class="fa fa-clock-o" title="<?php _e( 'Published on', 'nano-progga' ); ?>"></span>
            <abbr class="published dt-published" title="<?php the_time('Y-m-d\TH:i:sO') ?>">
                <?php the_time( 'd M Y' ); ?>
            </abbr>
        </span>

    </div> <!-- .entry-meta .entry-meta-top -->

</article> <!-- #post-<?php the_ID(); ?> -->