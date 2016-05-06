<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php include('includes/seo.php'); ?>
<?php if (get_option('swt_alt_stylesheet')==''):?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php endif;?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<?php if ( is_singular() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/comments-ajax.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/realgravatar.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/hoveraccordion.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/veryer.js"></script>
<?php include('includes/lazyload.php'); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js" ></script>

<!-- 预加载 -->
<?php if (is_archive() && ($paged > 1) && ($paged < $wp_query->max_num_pages)) { ?>
<link rel="prefetch" href="<?php echo get_next_posts_page_link(); ?>">
<link rel="prerender" href="<?php echo get_next_posts_page_link(); ?>">
<?php } elseif (is_singular()) { ?>
<link rel="prefetch" href="<?php bloginfo('home'); ?>">
<link rel="prerender" href="<?php bloginfo('home'); ?>">
<?php } ?>

<!-- 返回顶部 -->
<style type="text/css">
.backToTop {
    display: none;
    width: 18px;
    line-height: 1.2;
    padding: 5px 0;
    background-color: #000;
    color: #fff;
    font-size: 12px;
    text-align: center;
    position: fixed;
    _position: absolute;
    right: 30px;
    bottom: 100px;
    _bottom: "auto";
    cursor: pointer;
    opacity: .6;
    filter: Alpha(opacity=60);
}
</style>
</head>

<body>
<div id="page">
<div id="header">
<div id="top">
<div id="top_logo">
 <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><div class="logo"></div></a>
</div>
		<div class="search">		
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="30" />
				<button type="submit"><?php _e("Search"); ?></button>
			</form>
		</div><div class="clear"></div>
<div class="topnav">
<?php
if(function_exists('wp_nav_menu')) {
    wp_nav_menu(array('theme_location'=>'primary','menu_id'=>'nav','container'=>'ul'));
}
?>
<a class="nav-rand" title="点我吧，点我吧！我能随机给你找一篇好看的文章！"  rel="nofollow" href="<?php bloginfo('url'); ?>/?random=1">随机</a>
</div>
<div id="rss"><ul>
<li class="rssfeed"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" rel="nofollow" class="icon1" title="欢迎订阅<?php bloginfo('name'); ?>"></a></li>
<?php if (get_option('swt_tqq') == 'Display') { ?><li class="tqq"><a href="<?php echo stripslashes(get_option('swt_tqqurl')); ?>" target="_blank" rel="nofollow" class="icon2" title="我的腾讯微博"></a></li><?php { echo ''; } ?><?php } else { } ?>
<?php if (get_option('swt_tsina') == 'Display') { ?><li class="tsina"><a href="<?php echo stripslashes(get_option('swt_tsinaurl')); ?>" target="_blank" rel="nofollow" class="icon3" title="我的新浪认证微博"></a></li><?php { echo ''; } ?><?php } else { } ?>
<?php if (get_option('swt_qzone') == 'Display') { ?><li class="qzone"><a href="<?php echo stripslashes(get_option('swt_qzoneurl')); ?>" target="_blank" rel="nofollow" class="icon5" title="我QQ认证空间"></a></li><?php { echo ''; } ?><?php } else { } ?>
<?php if (get_option('swt_mailqq') == 'Display') { ?><li class="rssmail"><a href="http://mail.qq.com/cgi-bin/feed?u=<?php bloginfo('rss2_url'); ?>" target="_blank" rel="nofollow" class="icon4" title="用QQ邮箱阅读空间订阅我的博客"></a></li><?php { echo ''; } ?><?php } else { } ?>
</ul></div>
<div class="clear"></div>
</div>
<div id="map">
<div class="position">
当前位置：<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
 ><?php
if( is_single() ){
$categorys = get_the_category();
$category = $categorys[0];
echo( get_category_parents($category->term_id,true,' >') );echo $s.' 查看文章';
} elseif ( is_page() ){
the_title();
} elseif ( is_category() ){
single_cat_title();
} elseif ( is_tag() ){
single_tag_title();
} elseif ( is_day() ){
the_time('Y年Fj日');
} elseif ( is_month() ){
the_time('Y年F');
} elseif ( is_year() ){
the_time('Y年');
} elseif ( is_search() ){
echo $s.' 的搜索结果';
}
?>
</div>

        <?php if (get_option('swt_add') == 'Display') { ?>
		<div class="baiduad"><?php echo stripslashes(get_option('swt_addcode')); ?></div>
	<?php { echo ''; } ?><?php } else { } ?>

</div>
</div>