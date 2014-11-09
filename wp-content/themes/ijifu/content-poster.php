<div class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <div class="featured-post">
            <?php _e( 'Featured post', 'twentytwelve' ); ?>
        </div>
        <?php endif; ?>
        <div class="entry-header">
            <?php if ( is_single() ) : ?>
            <div class="entry-title"><?php echo get_the_title(); ?></div>
            <?php else : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
            <?php endif; // is_single() ?>
        </div><!-- .entry-header -->
        <div class="post-meta">
            <span class="author vcard"><?php echo ijifu_get_Author($post->ID); ?></span>
            <time class="pull-right entry-date"><?php the_time('Y-m-d'); ?></time>
        </div>
        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
    </div><!-- #post -->
