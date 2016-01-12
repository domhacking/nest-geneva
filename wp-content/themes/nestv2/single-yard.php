<?php
/*
Template Name: single-yard
*/
?>
<?php get_header(); ?>

<style>
.menu-item-512 a, .menu-item-1988 a {
		color:#9b74b3 !important; 
		font-weight:bold;
}

.menu-item-513 a,
.menu-item-514 a{
		color:#d1d1d1 !important; 
		font-weight:normal !important;
}

.menu-item-513 a:hover,
.menu-item-514 a:hover{
		color:#9b74b3  !important; 
		font-weight:bold !important;
}

</style>

<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Gallery Menu Galleries')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<span class="galTitle"><?php the_title(); ?></span>
	<div class="text">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<p><?php the_content(); ?></p>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	<!-- end colleft -->
<?php get_footer(); ?>
