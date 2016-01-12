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
		<div class="image"><a href="<?php bloginfo('url'); ?>/?page_id=55"><img src="<?php the_field('box_left_image'); ?>" /></a></div>
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
    <div class="newsright"><div id="category-<?php the_ID(); ?>" <?php post_class(); ?>><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li></div>
	<div class="newsDate"><?php the_time('M j, Y') ?></div>
	</div>
    <?php the_excerpt(); ?></a></div>
 <?php endforeach; ?>
 <?php $post = $tmp_post; ?>
		</div>
		<div class="right">
		<div class="title">NEWSLETTER</div>
		Receive all the latest news & info regarding NEST - exhibitions, latest apartments, promotions, parties - straight in your mailbox by subscribing to our newsletter.
		</div>
		<div class="rightInput"><form method="post"
	action="http://admin.nest-geneva.ch/mail/newsletter/user/process.php?sExternalid=7603e2fc2d2226fc74fa4b4519c60f0d" name="signup" accept-charset="utf-8">
<fieldset>

<!--Email field must be named "Email" -->
<div>
<input type="text" name="Email" id="email" maxlength="60" value="Your Email Address"/>
</div>

</fieldset>

<div id="buttons">

<input type="hidden" name="pommo_signup" value="true" />
<input type="submit" value="" />

</div>

</form></div>
		<div class="joinUs"><a href="https://www.facebook.com/pages/NEST-Gallery/210391972348116" target="blank"><img src="<?php the_field('facebook_icon'); ?>"></a></div>
		</div>

<!-- begin colLeft -->

	<!-- end colleft -->
	
  
<?php get_footer(); ?>