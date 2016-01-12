<?php
/*
Template Name: philosophy-living
*/
?>
<?php get_header(); ?>

<style>


#menu-item-282 {
		font-weight:bold;
		}
</style>

<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Living')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
	<div id="philColLiv">
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