<?php
/*
Template Name: philosophy-gallery
*/
?>
<?php get_header(); ?>
<style>
#menu-item-296 {
		font-weight:bold;
		}
</style>



<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
	<div id="philColGal">
	<div class="text">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div></div>
	<!-- end colleft -->
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>