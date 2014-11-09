<?php
/**
 * Template Name: Video Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
$category = 'video';
$catId = get_cat_ID($category);
$post_list = ijifu_get_post_list($catId);
?>
    <div class="hot-video-icon"></div>
	<div class="video-container">
        <?php if ( $post_list->have_posts() ) : ?>
            <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
                <div class="video-item">
                    <a class="video-detail-link" href="<?php the_permalink(); ?>">                       
                        <span class="title">
                            <?php echo $post->post_title; ?>
                        </span>
                    </a>
                    <div class="video-featured-image">
                    	<?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
                                        
            <div class="page_navi">
                <?php if ( function_exists('wp_pagenavi') )
                    wp_pagenavi( array('query' => $post_list) );
                ?>
            </div>
        <?php endif; ?>
	</div><!-- #primary -->
<?php get_footer(); ?>