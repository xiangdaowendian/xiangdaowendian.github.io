
<!--版权-->
<div class="warpper">
	<div class="div_copyright">
		<div class="box_480 left">
			
			<?php global $ashu_option; echo $ashu_option['ashu']['_beian']; ?> |版权所有：Theme By : <a href="http://www.orchidfairy.com" title="orchidfairy">OrchidFairy</a><a href="<?php bloginfo('siteurl');?>/"><?php bloginfo('name'); ?></a>2013. All rights reserved. / <?php global $ashu_option; echo $ashu_option['ashu']['_lltj']; ?>
		</div>
		<div class="box_480 right text_right">
			<ul class="div_social_icon">
				<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_syyc_tp']; ?>" title="RSS订阅" target="_blank" rel="nofollow"><li class="icon_social_rss">RSS订阅</li></a>
			<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_syyc_js']; ?>" title="关注豆瓣" target="_blank" rel="nofollow"><li class="icon_social_douban">关注豆瓣</li></a>
			<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_fenlei_gg']; ?>" title="关注新浪微博" target="_blank" rel="nofollow"><li class="icon_social_sina">关注新浪微博</li></a>
			<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_fenlei_gg_a']; ?>" title="邮件订阅更新" target="_blank" rel="nofollow"><li class="icon_social_mail">邮件订阅</li></a>
			<li class="div_search">
				<form method="get" id="searchForm1" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="text" value="Search the archives..." onfocus="if (this.value == 'Search the archives...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search the archives...';}" name="s" id="s1" />
				</form>
				</li>
			</ul>
		</div>
	<div class="clear"></div>
	</div>
</div>
</body>
</html>