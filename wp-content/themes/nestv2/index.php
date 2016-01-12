<?php get_header(); ?>
<?php  if (is_category(get_option('boldy_portfolio')) || post_is_in_descendant_category( get_option('boldy_portfolio'))){?>
<?php include (TEMPLATEPATH . '/portfolio.php'); ?>
<?php } else {?>
		<!-- Begin #colLeft -->
		<div id="colLeftIndex">

					
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
		
		<!-- Begin .postBox -->
		<div class="postItem">
		
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1> 
				<div class="meta">
							<?php the_time('M j, Y') ?>  &nbsp;&nbsp;//&nbsp;&nbsp;  <?php the_category(', ') ?> 
						</div>
						<div class="newsLeft">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news_img_sml'); ?></a>
						</div>
						<div class="newsRight">
				<?php the_excerpt(__('Read more >>')); ?> 
				
		</div></div>
		
		<!-- End .postBox -->
		
		<?php endwhile; ?>

	<?php else : ?>

		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
            <!--<div class="navigation">
						<div class="alignleft"><?php next_posts_link() ?></div>
						<div class="alignright"><?php previous_posts_link() ?></div>
			</div>-->
			<?php if (function_exists("emm_paginate")) {
				emm_paginate();
			} ?>

		</div>
		<!-- End #colLeft -->
	
<div class="sidebarNew">
<div class="newsTitle">News Archives</div>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('News Menu')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<?php }?>
<?php get_footer(); ?>