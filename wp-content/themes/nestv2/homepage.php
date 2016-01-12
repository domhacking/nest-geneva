<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>
<div class="homeIntro"><?php the_field('intro_text'); ?></div>
	  <div class="sliderTop"></div>
	  <div id="theslider">
	  
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<div class="sliderBase"></div></div>
		<div id="homeContent">
		<div class="left">
		<div class="title"><?php the_field('left_box_title'); ?></div>
		<div class="image"><a href="<?php bloginfo('url'); ?>/?page_id=51"><img src="<?php the_field('box_left_image'); ?>" /></a></div>
		<div class="text"><?php the_field('box_left_description'); ?></div>
		</div>
		<div class="right">
		<div class="title"><?php the_field('right_box_title'); ?></div>
		<div class="image"><a href="<?php bloginfo('url'); ?>/?page_id=70"><img src="<?php the_field('right_box_image'); ?>" /></a></div>
		<div class="test"><?php the_field('right_box_description'); ?></div>
		</div>
		</div>
		<div id="contactArea">
		<div class="left">
		<div class="title">LATEST NEWS</div>
		<?php
 global $post;
 $tmp_post = $post;
 $myposts = get_posts('numberposts=3&category=3');
 foreach($myposts as $post) :
   setup_postdata($post);
 ?><div class="newsPiece">
 <div class="newsleft"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news_img_sml'); ?></a></div>
    <div class="newsright"><div id="category-<?php the_ID(); ?>" <?php post_class(); ?>><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li></div>
	<div class="newsDate"><?php the_time('M j, Y') ?></div>

    <div class="homeex"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a>	</div></div></div>
 <?php endforeach; ?>
 <?php $post = $tmp_post; ?>
		</div>
		<div class="right">
		<div class="title">NEWSLETTER</div>
		Receive all the latest news & info regarding NEST - exhibitions, latest apartments, promotions, parties - straight in your mailbox by subscribing to our newsletter.<br />
		</div>
		
        <div class="rightInput">
        <style type="text/css">
span.label,span.spacer,span.multiple span {width:200px;float:left;} 
span.label {width:200px;}
span.multiple {float:left;} 
span.button {background: url("images/send.jpg") repeat scroll 0% 0% transparent;
     border: 0px none;
     height: 24px;
     width: 190px;
	 margin-top: 15px;} 
div.clear {clear:both;padding-top:15px;} 
</style> 

<!-- Form -->

<form action="http://c-lynk.createsend.com/t/r/s/yhdhyuj/" method="post" id="subForm">

<div>
<span class="label"><label for="yhdhyuj-yhdhyuj"></label></span>
<span><input type="text" name="cm-yhdhyuj-yhdhyuj" id="yhdhyuj-yhdhyuj" /></span>
</div>
<div>

</div>
<div>
<div id="buttons"><input type="submit" value="" /></div>
</div>
</form>
        
		<div class="joinUs"><a href="https://www.facebook.com/NESTGalleriesGeneva" target="blank"><img src="<?php the_field('facebook_icon'); ?>"></a><br/><br/>
        <a href="https://instagram.com/nest_galleries/" target="blank"><img src="http://www.nest-geneva.ch/wp-content/uploads/2012/02/instagram-button.png"></a></div>
		</div>
        </div>

<!-- begin colLeft -->

	<!-- end colleft -->
	
  
<?php get_footer(); ?>