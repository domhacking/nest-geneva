<?php
/*
Template Name: find-contact
*/
?>
<?php get_header(); ?>

<style>
#menu-item-301 {
		font-weight:bold;
		}
</style>

<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
	<div id="contactColLeft">
	<div class="topBox">
	<?php the_field('contact_left_top'); ?>
	</div>
	<div class="bottomBox">
	<?php the_field('contact_left_bottom'); ?>
	</div>
	</div>
	<div id="map">
	<?php the_field('contact_map'); ?>	
	</div>
	<!-- end colleft -->
	
	<?php get_sidebar(); ?>	

<?php get_footer(); ?>