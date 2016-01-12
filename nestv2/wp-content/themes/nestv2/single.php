<?php
get_header();
?>

<!-- Begin #colLeft -->

		<div id="colLeftSingle">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="postItem">
				<h1><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></h1> 
				<div class="meta">
							<?php the_time('M j, Y') ?> 
						</div>
						<div class="newsImageBIG">
						<?php the_post_thumbnail('news_img_lrg'); ?></div>
				<?php the_content(__('read more')); ?> 
				

		
		
			</div>
		<?php endwhile; else: ?>

		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
		
			</div>
		<!-- End #colLeft -->

<div class="sidebarNew">
<div class="newsTitle">News Archives</div>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('News Menu')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>

<?php get_footer(); ?>
