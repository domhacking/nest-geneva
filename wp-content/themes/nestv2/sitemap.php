<?php
/*
Template Name: sitemap
*/
?>
<?php get_header(); ?>

<!-- begin colLeft -->

		<div id="siteMapCont">
		<div class="text">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div></div></div>
	<!-- end colleft -->
	
	<?php get_sidebar(); ?>	

<?php get_footer(); ?>