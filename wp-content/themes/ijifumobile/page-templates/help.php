<?php
/**
 * Template Name: Help Page Template
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
$category = 'question';
$catId = get_cat_ID($category);
$post_list = ijifu_get_post_list($catId);

if (isset($_POST['suggestion'])) {
    ijifu_insert_suggestion($_POST['suggestion']);
}

?>
    <div class="questions-icon"></div>
	<div class="questions-container">
        <?php if ( $post_list->have_posts() ) : ?>
            <?php 
                $index = 1;
                while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
                <div class="question-item">
                    <div class="question-title">                       
                        <?php
                            echo $index . '. ' . get_the_title();
                            $index ++;
                        ?>
                    </div>
                    <div class="question-anwser">
                        <?php echo '答: ' . get_the_content(); ?>
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
    <div class="visitor-suggestion">
            <div class="visitor-suggestion-icon"></div>
            <form class="suggestion-form" method="POST">
                <textarea rows="10" class="suggestion-context" name="suggestion"></textarea>
                <div class="overflow-hidden">
                    <input class="pull-right suggestion-submit-btn" type="submit" value="提交" />
                </div>
            </form>
        </div>   
<?php get_footer(); ?>