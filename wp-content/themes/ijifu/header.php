<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<div class="overflow-hidden">
        	<div class="pull-left">
        		<div class="websit-logo"></div>
        	</div><!-- header -->
        
        	<div id="mainmenu" class="pull-left nav-menu">
        		<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
        		
			</div><!-- mainmenu -->
    	</div>
	    <div class="home-upside-container overflow-hidden">
	        <div class="latest-video-container pull-left">
                <?php
                    $homeVideoId = get_cat_ID('home video');
                    
                    $post_list = ijifu_get_post_list($homeVideoId);
                    if ( $post_list->have_posts() ) :
                    	while ( $post_list->have_posts() ) : $post_list->the_post(); 
                            the_content();
                        endwhile;
                    endif;
                ?>
	        </div>
	        <div class="download-container pull-left overflow-hidden">
	        	<div class="overflow-hidden">
		            <div class="qrcode-container android-qrcode-container pull-left">
		                <a href="http://ijifu-site.qiniudn.com/android_latest.apk" class="android-qrcode qrcode-item display-block">
		                	<img src="<?php echo get_template_directory_uri(); ?>/images/android.png" />
		                	<button class="downloat-btn">安卓下载</button>
		                </a>
		                
		            </div>
		            <div class="qrcode-container ios-qrcode-container pull-left">
		                <a href="https://itunes.apple.com/us/app/i-ji-fu/id858296989?l=zh&ls=1&mt=8" class="ios-qrcode qrcode-item display-block">
		                	<img src="<?php echo get_template_directory_uri(); ?>/images/ios.png" />
		                	<button class="downloat-btn">苹果下载</button>
		                </a>
		            </div>
	            </div>
	            <div class="download-description overflow-hidden">
                    <div class="hot-activity-img"></div>
                    <div class="hot-activity-excerpt">
                       <?php echo do_shortcode("[metaslider id=76]"); ?>
                    </div>
	            </div>
	        </div>
	    </div>
		<div id="main" class="site-main">
