<?php get_header(); ?>
<div id="content">
<div class="main"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="left">
<div class="article">
<h2><?php the_title(); ?></h2>
<div class="article_info">作者：<?php the_author() ?> &nbsp; 出生：<?php the_time('Y-m-d H:i') ?> &nbsp; 分类：<?php the_category(', ') ?> &nbsp; 自由度：<?php if(function_exists(the_views)) { the_views();}?> &nbsp; <?php comments_popup_link ('抢沙发','1条评论','%条评论'); ?> &nbsp; <?php edit_post_link('编辑', ' [ ', ' ] '); ?></div><div class="clear"></div>
        <div class="context">
		<!-- 广告位：文章上 -->
        <?php if (get_option('swt_adb') == 'Display') { ?>
		<div style="margin:5px auto 5px auto;width:300px;"><?php echo stripslashes(get_option('swt_adbcode')); ?></div>
	<?php { echo ''; } ?><?php } else { } ?>
	<?php include("share.php"); ?>
        	<?php the_content('Read more...'); ?>   
本文链接: <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_permalink() ?> | <?php bloginfo('name');?></a>


<!-- 历史上今天 -->
<p><?php if (function_exists('wp_today')) {print wp_today();} ?> </p>
</div>


</div>
</div>
<div class="articles">
<div class="author_pic">
					<a href="#" title="<?php the_author_description(); ?>"><?php echo get_avatar( get_the_author_email(), '48' ); ?></a>
				</div>
<div class="author_text">
		<span class="spostinfo">
			该日志由  <?php the_author_posts_link(); ?>  于<?php the_time('Y年m月d日') ?>发表在 <?php the_category(', ') ?> 分类下<br/>
			<font color="#F00">声明: 本文采用 BY-NC-SA  协议进行授权. 转载请注明</font>
<br/>	

			<?php the_tags('关键字: ', ', ', ''); ?>
		</span>
				</div>
</div>

<div class="articles">
        <?php if (get_option('swt_adc') == 'Display') { ?><div style="margin:0 auto;width:560px;"><?php echo stripslashes(get_option('swt_adccode')); ?></div><?php { echo ''; } ?><?php } else { } ?>
</div>

<div class="articles">
<?php previous_post_link('【上一篇】%link') ?><br/><?php next_post_link('【下一篇】%link') ?>
</div>

<div class="articles">
<?php include('includes/related.php'); ?>
<div class="clear"></div>
</div>

<div class="articles">
<?php comments_template(); ?>
</div>

	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>