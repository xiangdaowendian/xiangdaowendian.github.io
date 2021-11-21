<?php get_header(); ?>
<!--文章-->
<div class="div_whole_bg">
<div class="warpper">
		
			<?php while (have_posts()) : the_post(); ?>	
			<h4><?php the_title(); ?><span>┊ 所属分类：<?php the_category(', ') ?></span></h4>
            <div class="conzt">
            <?php the_content(); ?>
            </div>
		<?php endwhile; ?>
<!-- pb259 -->					<div class="clear"></div>
			
		
	

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
</div>
<div class="warpper">
<?php comments_template(); ?> 
</div> 
<!--友情链接-->
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