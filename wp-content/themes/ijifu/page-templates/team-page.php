<?php
/**
 * Template Name: Team Page Template
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
$category = 'team';
$catId = get_cat_ID($category);
$post_list = ijifu_get_post_list($catId);
?>
    <div class="team-introduction-icon"></div>
	<div class="team-container">
        <div class="team-leader">
            <div class="leader-name">杨悦</div>
            <div class="leader-title">职务: 创始人兼总经理</div>
            <div class="leader-background">毕业于北航空软件工程专业，18年消费产品运作经验，曾作为市场负责人就职于联想、奥美广告、蒙牛等企业</div>
        </div>

        <div class="team-leader">
            <div class="leader-name">杨悦</div>
            <div class="leader-title">职务: 创始人兼总经理</div>
            <div class="leader-background">毕业于北航空软件工程专业，18年消费产品运作经验，曾作为市场负责人就职于联想、奥美广告、蒙牛等企业</div>
        </div>

        <div class="team-leader">
            <div class="leader-name">杨悦</div>
            <div class="leader-title">职务: 创始人兼总经理</div>
            <div class="leader-background">毕业于北航空软件工程专业，18年消费产品运作经验，曾作为市场负责人就职于联想、奥美广告、蒙牛等企业</div>
        </div>
	</div><!-- #primary -->
<?php get_footer(); ?>