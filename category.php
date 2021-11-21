<?php get_header(); ?>
<!--最新文章-->
<div class="div_whole_bg">
<div class="warpper">

	
				<h2 class="f_gengxin">最新文章</h2>

		<div class="div_img150_with_title">
        <?php query_posts("showposts=24"); ?>
			<?php while (have_posts()) : the_post(); ?>	
			<li>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
					<div class="div_border"></div>
				</a>
				<div class="ta-pageimg-center">
		<a href="<?php the_permalink() ?>"  rel="nofollow"  title="<?php the_title(); ?>" target="_self"><img alt="<?php the_title(); ?>" width="150" src="<?php echo post_thumbnail_src() ?> " onload="javascript:DrawImage(this,150,150)" onmouseover="this.style.backgroundColor='#39b8ff'" onmouseout="this.style.backgroundColor='#FFFFFF'" /></a>
		</div>				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
					<b><?php the_title(); ?></b>
				</a>
			</li>
		<?php endwhile; ?>
<!-- pb259 --><div class="pagebar">
<div class="page_navi"><?php par_pagenavi(9); ?></div>
</div>					<div class="clear"></div>
			
		</div>
	

</div>
</div>
<!---->
<!--球-->
<div class="warpper">
	<ul class="div_radius_circle">
		<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_shougong']; ?>" title="手工"><li class="bgcolor_blue f_shougong">手工</li></a>
		<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_liangpin']; ?>" title="良品"><li class="bgcolor_grey f_liangpin">良品</li></a>
		<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_sheji']; ?>" title="设计"><li class="bgcolor_purpele f_sheji">设计</li></a>
		<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_meiyan']; ?>" title="美颜"><li class="bgcolor_pink f_beauty">美颜</li></a>
		<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_mengchong']; ?>" title="萌物"><li class="bgcolor_yellow f_meng">萌物</li></a>
	</ul>
	<div class="clear"></div>
</div>
<!--品牌推荐-->
<div class="warpper">
	<h2 class="f_pinpaituijian">品牌推荐</h2>
	
	<ul class="div_img110_with_title">
		<li>
			<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_syid_cc']; ?>">
				<img src="<?php global $ashu_option; echo $ashu_option['ashu']['_syid_bb']; ?>" onload="javascript:DrawImage(this,110,110)">
			</a>
		</li>
		<li>
			<a href="<?php global $ashu_option; echo $ashu_option['ashu']['_syid_cc_c']; ?>">
				<img src="<?php global $ashu_option; echo $ashu_option['ashu']['_syid_bb_b']; ?>" onload="javascript:DrawImage(this,110,110)">
			</a>

		</li>
		
	</ul>
    <div class="div_img110_with_titleg">
			<?php global $ashu_option; echo $ashu_option['ashu']['_syid_aa']; ?>
		</div>
	<div class="clear"></div>
</div><!--友情链接-->
<?php  if ( is_home()) { ?>
<div class="warpper">
	<h2 class="f_link">友情链接</h2>
	<ul class="div_link">

		<?php wp_list_bookmarks('title_li=&categorize=0'); ?>

	</ul>
	<div class="clear"></div>
</div>
<?php } ?>
<?php get_footer(); ?>