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
	<!-- Chang URLs to wherever Video.js files will be hosted -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/video-js.min.css" rel="stylesheet" type="text/css">
    <!-- video.js must be in the <head> for older IEs to work. -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>

    <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
    <script>
      videojs.options.flash.swf = "video-js.swf";
    </script>
	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<div class="mobile-home-header overflow-hidden">
            <div class="websit-logo pull-left">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
            </div>
        	<div class="download-container pull-left">
        		<div class="pull-right download-ios">
		        	
			        <a href="https://itunes.apple.com/us/app/i-ji-fu/id858296989?l=zh&ls=1&mt=8" class="display-block">
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-ios.png" />
	                    <div class="mobile-download-item">苹果下载</div>
			        </a>
		        </div>
        		<div class="pull-right">
			        <a href="http://ijifu-site.qiniudn.com/android_latest.apk" class="display-block">
			            <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-android.png" />
			            <div class="mobile-download-item">安卓下载</div>
			        </a>
		        </div>
			</div><!-- mainmenu -->
    	</div>
    	<div class="latest-video-container">
    		<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="203px"
			      poster="http://video-js.zencoder.com/oceans-clip.png"
			      data-setup="{}">
			    <source src="http://ijifu-site.qiniudn.com/helpvideo.mp4" type='video/mp4' />
			    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
			    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
			</video>
			
    		<!--
    		<embed src="http://www.gdd.ro/gdd/flvplayer/gddflvplayer.swf" flashvars="?&autoplay=false&sound=70&buffer=2&vdo=http%3A%2F%2Fijifu%2Dsite%2Eqiniudn%2Ecom%2Fhelpvideo%2Emp4&splashscreen=http://www.gdd.ro/flvplayer/examples/fast-and-furious-1.jpg" width="468" height="328" allowFullScreen="true" quality="best" wmode="transparent" allowScriptAccess="always"  pluginspage="http://www.macromedia.com/go/getflashplayer&splashscreen=http://www.gdd.ro/flvplayer/examples/fast-and-furious-1.jpg"  type="application/x-shockwave-flash"></embed>
            -->

            <?php
                /*$homeVideoId = get_cat_ID('home video');
                    
                $post_list = ijifu_get_post_list($homeVideoId);
                if ( $post_list->have_posts() ) :
                    while ( $post_list->have_posts() ) : $post_list->the_post(); 
                        the_content();
                    endwhile;
                endif;*/
            ?>
	    </div>

	    <div class="mobile-activity-container overflow-hidden">
            <div class="pull-left download-description overflow-hidden">
                <div class="hot-activity-excerpt">
                   <?php echo do_shortcode("[metaslider id=46]"); ?>
                </div>
            </div>
	    </div>
		<div id="main" class="site-main">
