<?php get_header(); ?>
<div id="content">
<div class="main">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<ul <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<li>
<div class="article">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span class="new"><?php include('includes/new.php'); ?></span></h2>
<div class="comments_num"><?php comments_popup_link ('抢沙发','1条评论','%条评论'); ?></div>
<div class="info">出生：<?php the_time('Y-m-d') ?> | 分类：<?php the_category(', ') ?> | 自由度：<?php if(function_exists(the_views)) { the_views();}?></div>
<?php if (get_option('swt_thumbnail') == 'Display') { ?>
        <?php if (get_option('swt_articlepic') == 'Display') { ?>
<?php include('includes/articlepic.php'); ?>
    <?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/thumbnail.php'); } ?>
<?php { echo ''; } ?><?php } else { } ?>
<div class="entry_post"><span><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 365,"..."); ?></span></div>
<div class="clear"></div>
<div class="info"><?php the_tags('标签：', ', ', ''); ?></div>
<span class="more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark">阅读全文</a></span>
</div></li></ul><div class="clear"></div>
		<?php endwhile; ?>
		<?php endif; ?> 
<div class="navigation"><?php pagination($query_string); ?></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>