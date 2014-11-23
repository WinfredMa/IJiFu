<?php
/**
 * Template Name: Home Page Template
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

get_header(); ?>
    <div class="home-body-image-one">
      <img src="<?php echo get_template_directory_uri(); ?>/images/body1.png" />
    </div>
    <div class="home-body-image-two">
      <img src="<?php echo get_template_directory_uri(); ?>/images/body2.png" />
    </div>
    <div class="home-body-image-three">
      <img src="<?php echo get_template_directory_uri(); ?>/images/body3.png" />
    </div>
    
	<div id="primary" class="site-content">
		<div id="content" role="main">
         
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>