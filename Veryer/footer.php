<div class="clear"></div>
<div id="footer">

<?php if ( is_home() &&! is_paged() ) { ?>
<div class="footer-links">
<h3><a href="<?php bloginfo('url'); ?>/links" title="点击 申请友链">友情链接</a></h3>
<ul><?php wp_list_bookmarks('orderby=link_id&categorize=0&category='.get_option('swt_links').'&title_li='); ?></ul></div>
<div class="clear"></div>
<?php } ?>

<?php if (is_single() || is_page() || is_category() || is_tag() || is_date() || is_year() || is_month() || is_day() || is_time() || is_archive() || is_search() || is_404() || is_paged() ) { ?>
<?php if (get_option('swt_addb') == 'Display') { ?><div style="margin:0 auto;width:960px;"><?php echo stripslashes(get_option('swt_addbcode')); ?></div><?php { echo ''; } ?><?php } else { } ?>
<?php } ?>

<p class="footer_Copyright">
版权归  <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> 所有  基于 <a href="http://cn.wordpress.org" target="_blank" >WordPress </a> 构建   Theme by <a href="http://zycao.com" target="_blank" >ootver</a>   <?php if (get_option('swt_beian') == 'Display') { ?><a href="http://www.miitbeian.gov.cn/" target="blank" rel="external nofollow"><?php echo stripslashes(get_option('swt_beianhao')); ?></a><?php { echo ''; } ?><?php } else { } ?> <?php if (get_option('swt_tj') == 'Display') { ?><?php echo stripslashes(get_option('swt_tjcode')); ?><?php { echo ''; } ?>	<?php } else { } ?>  
</p>
 </div>
<?php wp_footer(); ?>
</div>


<?php if ( is_home()) { ?>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=left&amp;uid=45408" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":2};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
<?php } ?>



<script type="text/javascript">
(function() {
    var $backToTopTxt = "▲返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
        .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
            $("html, body").animate({ scrollTop: 0 }, 120);
    }), $backToTopFun = function() {
        var st = $(document).scrollTop(), winh = $(window).height();
        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
        //IE6下的定位
        if (!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);
        }
    };
    $(window).bind("scroll", $backToTopFun);
    $(function() { $backToTopFun(); });
})();
</script>
</body>
</html>