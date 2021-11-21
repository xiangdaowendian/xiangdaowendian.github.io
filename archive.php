<?php get_header(); ?>

<div class="wrapper">
<div class="content">
	<div class="white_dh">
		<div class="daohang">
			<div class="h_center">
				<div class="jiu_hd">
					<div class="jiu_dao">
						<h3>导航：</h3>
			<ul id="nav">
	<li class="selected"><a href="http://demo6.10youhui.com/">全部</a></li>
         <?php wp_list_categories('orderby=id&title_li=&hide_empty=0&exclude=1'); ?>
			</ul>
					</div>
				</div>
					<div class="jiu_show">
						<div class="type_show"><span>所有宝贝：</span></div>
						<div class="type_detail">共<font color="#fa6400" style="font-weight:bold;"><?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish;?></font>个宝贝， 今日上新<span ><font color="#fa6400" style="font-weight:bold;"> 9</font><em class="new_em"></em></span><span class="textspan">个</span></div>
						
<div class="type_page">




<?php previous_posts_link('<span class="pg-prev">上一页</span><em></em>'); ?>
<?php next_posts_link('<span class="pg_next">下一页</span><em></em>'); ?>

</div>

<div class="old_see" id="orderid">
<a class="old_see_a" href="javascript:;">
<span>最新</span></a>
<div class="zhuangtai">
									<ul>
										<li class="last"><a href="list-sort-new-status-all.html">最新</a></li>
										<li class="last " ><a href="list-sort-price-status-all.html">折扣</a></li>
									</ul>
								</div>
						</div>
						<div class="old_see" id="stateid"><a class="old_see_a" href="javascript:;"><span>状态</span></a>
								<div class="zhuangtai">
	<ul>
<li class="last"><a href="#">全部</a></li>
<li ><a href="#">进行中</a></li>
<li ><a href="#">抢光了</a></li>
	</ul>
								</div>
						</div>
					</div>
				</div>
				<a href="#" class="filter-fold" id="fold"></a>
				<div class="bar_line"></div>
			</div>
		</div>

<ul class="list">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
<li class="buy">
<p><a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?><span class=H>包邮</span></a></p>

<div class="buy_cen">
<a href="<?php $values=get_post_custom_values("link"); echo $values[0]; ?>" target="_blank">
<?php dp_attachment_image($post->ID, 'medium', 'alt="' . $post->post_title . '"'); ?>
</a>

<div class="buy_state">
<span class="orig_price">原价<del><?php $values=get_post_custom_values("oldprice"); echo $values[0]; ?></del></span>
<span class="orig_price">折扣 <strong><?php $values=get_post_custom_values("discount"); echo $values[0]; ?></strong>折</span>
<span class="buy_ed"><strong><?php $values=get_post_custom_values("Nunber"); echo $values[0]; ?></strong></strong>人已购买</span>							</div>
</div>

<a href="<?php $values=get_post_custom_values("link"); echo $values[0]; ?>" class="buy_bt tag_buy"  target="_blank"><span class="one">￥</span><span class="two"><?php echo get_post_meta($post->ID, "price",true);?></span><span class="one">.00</span><span class="three">￥<?php $values=get_post_custom_values("oldprice"); echo $values[0]; ?></span></a>
<span class="li_bg"></span>
</li>		


<?php endwhile; ?>
<?php endif; ?> 
</ul>


<div class="clr"></div>
 

<div id="pnavigation" >
<?php if(function_exists('wp_pagenavi')){ wp_pagenavi(); } else { ?>

<span class="pg-prev">上一页</span>
<span>1</span><a href="list-sort-all-status-all-2.html">2</a> <a href="list-sort-all-status-all-3.html">3</a> <a href="list-sort-all-status-all-4.html">4</a> <a href="list-sort-all-status-all-5.html">5</a> <a href="list-sort-all-status-all-6.html">6</a> <a href="list-sort-all-status-all-7.html">7</a> <a href="list-sort-all-status-all-8.html">8</a> 
<a  class="pg_next"  href="list-sort-all-status-all-2.html">下一页<em></em></a>

<?php } ?>

</div>


		<div class="bottom">
			<div class="bottom_tp"><span>热门推荐:</span><a class="kanmore" href="/hot"><b class="txt">查看更多</b></a></div>
		   <ul>

<?php query_posts("showposts=5&cat=10")?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			   
<li>
<a class="pic" href="<?php $values=get_post_custom_values("link"); echo $values[0]; ?>" target="_blank">
<?php dp_attachment_image($post->ID, 'medium', 'alt="' . $post->post_title . '"'); ?></a>
<p  class="title_name"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p><a href="<?php $values=get_post_custom_values("link"); echo $values[0]; ?>" class="go">去抢购</a><span>￥<?php echo get_post_meta($post->ID, "price",true);?></span></li>
			
<?php endwhile; ?>
<?php endif; ?> 
		
						
		   </ul>
		</div>
	</div>


<div class="link">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:#e6e6e6 solid 1px;">
  <tr>
    <td valign="top">
	        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90" height="30" align="center"><div class="STYLE3" style="font-size:14px;font-weight:bold; margin-top:4px;">友情链接</div></td>
          <td align="left" style="color:#555"><div style="font-size:12px;margin-top:6px;">(申请友情链接请联系QQ：117788858)</div></td>
      
        </tr>
      </table>
	  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="2" bgcolor="#CF4429"></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left" class="td3" style="padding:8px 8px 4px 10px; line-height:20px;">
<A target=_blank  href="http://www.ems12306.com/" >免费小说阅读网</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://www.saario.com/" >书评网</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://themes.10youhui.com/" >十优主题网</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://demo1.10youhui.com/" >主题一</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://demo2.10youhui.com/" >主题二</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://demo3.10youhui.com/" >主题三</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://demo4.10youhui.com/" >主题四</A>&nbsp;&nbsp;  
 <A target=_blank  href="http://demo5.10youhui.com/" >主题五</A>&nbsp;&nbsp;  	  		 
  
		  		  </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="6"></td>
    </tr>
  </tbody>
</table>
</div>
</div>

<?php get_footer();?>
