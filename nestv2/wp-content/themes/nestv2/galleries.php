<?php
/*
Template Name: galleries
*/
?>
<?php get_header(); ?>
	<style type="text/css">
		
.menu-item-512 a{
		color:#9b74b3 !important; 
		font-weight:bold;
}

.menu-item-514 a, .menu-item-513 a{
		color:#d1d1d1 !important; 
		font-weight:normal !important;
}

.menu-item-514 a:hover, .menu-item-513 a:hover{
		color:#9b74b3  !important; 
		font-weight:bold !important;
}
			</style>
<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Gallery Menu Galleries')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
	<div class="aboveImg"><?php the_field('above_image'); ?></div>
	<div id="GalImages">
	<div class="gal"><div class="image"><a href="<?php bloginfo('url'); ?>/?page_id=436"><img src="<?php the_field('gallery'); ?>" /></a></div>
	<div class="name"><a href="<?php bloginfo('url'); ?>/?page_id=436"><?php the_field('gallery_name'); ?></a></div>
	<div class="size"><?php the_field('gallery_size'); ?></div></div>
	<div class="gal_last"><div class="image"><a href="<?php bloginfo('url'); ?>/?page_id=438"><img src="<?php the_field('pop_up'); ?>" /></a></div>
	<div class="name"><a href="<?php bloginfo('url'); ?>/?page_id=436"><?php the_field('pop_name'); ?></a></div>
	<div class="size"><?php the_field('pop_up_size'); ?></div></div>
	</div>
	<div id="galcolLeft">
	<div class="galleriesText">
	<div class="sectionTitle"></div>
		  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div></div>
			<div id="galcolRight">

<div class="right1">
	<a href="/nestv2/?page_id=263"><img src="<?php the_field('book_button'); ?>"></a>
	</div>
	</div>
	<!-- end colleft -->
	

<?php get_footer(); ?>