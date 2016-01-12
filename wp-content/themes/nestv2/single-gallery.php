<?php
/*
Template Name: single-gallery
*/
?>
<?php get_header(); ?>

<style>
.menu-item-512 a, .menu-item-513 a {
		color:#9b74b3 !important; 
		font-weight:bold;
}

.menu-item-514 a,
.menu-item-1988 a{
		color:#d1d1d1 !important; 
		font-weight:normal !important;
}

.menu-item-514 a:hover,
.menu-item-1988 a:hover{
		color:#9b74b3  !important; 
		font-weight:bold !important;
}

</style>

<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Gallery Menu Galleries')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="galTitle"> NEST GALLERY</div>
	<div id="appcolInner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	<!-- end colleft -->
	<div id="appBottom">
	<div class="left">
	<h2>Description</h2>
	<?php the_field('description'); ?>
	<div class="left2">
		
	</div>
	</div>
	<div class="center">
	<h2>Additional facilities:</h2>
	<?php the_field('the_nest_way'); ?></div>
	<div class="right">
	<div class="top"><h2>Prices</h2>
	<?php the_field('links'); ?></li></div>
	<div class="bottom"><h2>Floorplan</h2>
	<?php the_field('specifics'); ?></div>
	</div>
		<div class="right1">
	<a href="<?php bloginfo('url'); ?>/?page_id=57"><img src="<?php the_field('book_button'); ?>"></a>
	</div>
	</div>

<?php get_footer(); ?>
