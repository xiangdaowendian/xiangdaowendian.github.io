<?php get_header(); ?>



<div class="mains">
<div class="contant">
	<div class="white_top">
		<div class="white_top_left"></div>
		<div class="white_top_middle"></div>
		<div class="white_top_right"></div>
	</div>
	  <div class="main zhe_page">
		

<div class="piece content">
	  <div class="piece_box">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="content_tit" style="margin: auto 20px"><span><?php the_title(); ?></span></div>
                           <div class="content_text" style="margin: auto 20px">
				<div class=content_text>
                                    <?php the_content(); ?>  
                                </div>
			   </div>
		        </div>
<?php endwhile; ?>
<?php endif; ?>  
	</div>




	<div class="white_bottom">
		<div class="white_bottom_left"></div>
		<div class="white_bottom_middle"></div>
		<div class="white_bottom_right"></div>
	</div>
	</div>
</div>
</div>

<?php get_footer(); ?>




