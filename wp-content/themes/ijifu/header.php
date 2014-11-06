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
        		<ul id="yw0">
					<li class="active"><a class="home-menu" href="/bennet/index.php?r=site/index">首页</a></li>
					<li><a class="video-menu" href="/bennet/index.php?r=site/page&amp;view=about">视频</a></li>
					<li><a class="activity-menu" href="/bennet/index.php?r=site/contact">活动展示</a></li>
					<li><a class="poster-menu" href="/bennet/index.php?r=site/contact">帖子展示</a></li>
					<li><a class="team-menu" href="/bennet/index.php?r=site/contact">团队介绍</a></li>
					<li><a class="sugestion-menu" href="/bennet/index.php?r=site/login">意见反馈</a></li>
				</ul>
			</div><!-- mainmenu -->
    	</div>
	    <div class="home-upside-container overflow-hidden">
	        <div class="latest-video-container pull-left"></div>
	        <div class="download-container pull-left overflow-hidden">
	            <div class="android-qrcode qrcode-item pull-left">
	                <div>
	                </div>
	                <button class="downloat-btn">安卓下载</button>
	            </div>
	            <div class="ios-qrcode qrcode-item pull-left">
	                <div>
	                </div>
	                <button class="downloat-btn">苹果下载</button>
	            </div>
	            <div class="download-description"></div>
	        </div>
	    </div>
		<div id="main" class="site-main">
