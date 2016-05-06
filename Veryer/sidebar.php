<div id="sidebar">


<div class="widget"><div id="tab-title"><?php include('includes/r_tab.php'); ?></div></div>


<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具1') ) : ?>
	<?php endif; ?>
</div>

<?php if (get_option('swt_ada') == 'Display') { ?>
<div class="widget"><h3>一个AD</h3><?php echo stripslashes(get_option('swt_adacode')); ?></div><?php { echo ''; } ?><?php } else { } ?>

<?php wp_reset_query();if (is_single() || is_page() || is_archive() || is_search()) { ?>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具2') ) : ?>
	<?php endif; ?>
</div>
<?php } ?>

<div class="widget"><div class="top_comment">
	<?php if (get_option('swt_wallreaders') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/top_comment.php'); } ?></div>
</div>


<div class="widget"><?php include('includes/r_comment.php'); ?></div>



<div class="widget"><?php include('includes/r_tags.php'); ?></div>

<div class="widget">
<!-- 广告位：侧边下 -->

</div>

<?php if ( is_home() &&! is_paged() ) { ?>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具3') ) : ?>
	<?php endif; ?>
</div>
<?php } ?>

</div>
</div>