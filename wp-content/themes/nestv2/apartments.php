<?php
/*
Template Name: apartments
*/
?>
<?php get_header(); ?>

<style>
.aprtName a{
		color:#fff;		
}

#menu-item-288 a {
		font-weight:bold;
		}
		
		#menu-item-289 a, #menu-item-290 a, #menu-item-291 a {
		font-weight:normal;
		}
		
				#menu-item-289 a:hover, #menu-item-290 a:hover, #menu-item-291 a:hover {
		font-weight:bold;
		}
		
</style>

<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Living Children')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="appIntro">
	<?php the_field('introduction'); ?>
	</div>
<div id="AppImages">
	<div class="aprt">
	<div class="aprtName"><a href="<?php bloginfo('url'); ?>/?studio=studio-apartments"><?php the_field('studio_title'); ?></div>
	<div class="image"><img src="<?php the_field('studio'); ?>" /></a></div>
	<div class="size"><?php the_field('studio_size'); ?></div>
	</div>
	<div class="aprt">
	<div class="aprtName"><a href="<?php bloginfo('url'); ?>/?standard=standard"><?php the_field('standard_title'); ?></div>
	<div class="image"><img src="<?php the_field('standard'); ?>" /></a></div>
	<div class="size"><?php the_field('standard_size'); ?></div>
	</div>
	<div class="aprt_last">
	<div class="aprtName"><a href="<?php bloginfo('url'); ?>/?spacious=spacious"><?php the_field('spacious_title'); ?></div>
	<div class="image"><img src="<?php the_field('spacious'); ?>" /></a></div>
	<div class="size"><?php the_field('spacious_size'); ?></div>
</div>
	</div>
	<div id="appcolLeft">
	<div class="sectionTitle"></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
		<div id="appcolRight">

<div class="right1">
	<a href="/?page_id=263"><img src="<?php the_field('book_button'); ?>"></a>
	</div>
	</div>
	
	
	<!-- end colleft -->
	

<?php get_footer(); ?>