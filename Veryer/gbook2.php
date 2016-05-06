<div class="v_comment">
			<?php
				$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != 'tuo@zycao.com' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 66";//大家把管理员的邮箱改成你的,目的是从读者墙里面排除博客作者，最后的数字39是读者的个数，可以按照自己的情况修改！
			$wall = $wpdb->get_results($query);
			$maxNum = $wall[0]->cnt;
			foreach ($wall as $comment)
			{
			
			if( $comment->comment_author_url )
			$url = $comment->comment_author_url;
			else $url="#";
			$avatar = get_avatar(get_comment_author_email(), 32);
			$tmp = "<li><a target=\"_blank\" href=\"".$comment->comment_author_url."\">".$avatar."<em>".$comment->comment_author."</em> <strong>+".$comment->cnt."</strong></br></a></li>";
			$output .= $tmp;
			}
			$output = "<div id='readerswall'><ul class='gavaimg'>".$output."</ul></div>";
			echo $output ;
			?>
</div>