<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content single-page-container" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-poster', get_post_format() ); ?>
				<nav class="nav-single">
                    <span class="nav-previous"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '上一篇: ', 'Previous post link', 'twentytwelve' ) . '</span> %title', true ); ?></span>
                    <span class="nav-next"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '下一篇: ', 'Next post link', 'twentytwelve' ) . '</span> %title ', true ); ?></span>
                </nav><!-- .nav-single -->
                <?php
                    ijifu_set_latest_viewed_time(get_the_ID());
                    ijifu_set_post_views(get_the_ID());
                ?>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>