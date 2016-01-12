<?php get_header(); ?>

<style type="text/css">
#menu-item-289 a, #menu-item-288 a{
       color:#e7a613 !important;
       font-weight:bold;
}

#menu-item-290 a, #menu-item-291 a{
       color:#ccc !important;
       font-weight:normal;
}

#menu-item-290 a:hover, #menu-item-291 a:hover{
       color:#ccc !important;
       font-weight:bold;
}

#mainMenu.ddsmoothmenu .page_item.page-item-10 a{
        font-weight:bold;
   
}
				
			</style>

<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Living Children')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="apartTitle"><?php the_title(); ?></div>
<div class="apartnavigation">
<div class="alignleft">
<?php previous_post('< %',
 'prev', ''); ?>
</div>
<div class="alignright">
<?php next_post('% > ',
 'next', ''); ?>
 
</div>
</div> <!-- end navigation -->
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
	<h2>Links</h2>
	<?php the_field('links'); ?>	
	</div>
	</div>
	<div class="center">
	<h2>In your NEST</h2>
	<?php the_field('specifics'); ?></div>
	<div class="right">
	<h2>The NEST Way</h2>
	<?php the_field('the_nest_way'); ?>
	</div>
		<div class="right1">
	<a href="/?page_id=263"><img src="<?php the_field('book_button'); ?>"></a>
	</div>
	</div>

<?php get_footer(); ?>
