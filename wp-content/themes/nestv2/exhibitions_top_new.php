<?php
/*
Template Name: New Exhibitions Top Level
*/
?>

<?php get_header(); ?>


<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery Children')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>

	<?php 
		
		$mpvar = get_the_title();
		
		$mpvar = strtolower($mpvar);
		
		$mpvar = str_replace(" ", "-", $mpvar);
		
	?>
			
			<style type="text/css">
			
				div.gall_top_left {
					width: 420px;
					float: left;
					position: relative;
				}
				
				div.gall_top_right {
					width: 420px;
					float: right;
					position: relative;
				}
				
				p.which_gall {
					position: absolute;
					top: 0px;
					left: 0px;
					background: #6E2A8D;
					color: #ffffff;
					padding: 10px 5px;
					text-transform: uppercase;
				}
				
#menu-item-315 a, .menu-item-303 a{
       color:#9b74b3 !important;
       font-weight:bold;
}

#menu-item-304 a, #menu-item-305 a {
		color:#d1d1d1 !important;
		font-weight:normal;
}

#menu-item-303 a:hover{
		font-weight:bold;
}

			
			</style>
		
		
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
		<div class="gall_top_left">
		
			<?php
				$args = array( 'post_type' => 'nest_entries');
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$todays_date = date('d-m-Y');
				$start_date = get_field('date_from');
				$end_date = get_field('date_to');
				
				$today = strtotime($todays_date);
				$start = strtotime($start_date);
				$ended = strtotime($end_date);
								
			?>
			
			<?php
			
				//if($today >= $start && $today <= $ended) {
			
			?>
			
			<div class="individual_container" style="position: relative;">
				
				<p><?php the_title(); ?></p>
				
				<?php	$rows = get_field('exhibitions');
					if($rows)
					{

						foreach($rows as $row)
						{ ?>
							
							<a href="<?php the_permalink() ?>"><img src="<?php the_sub_field('exhibition_image'); ?>" alt="" /></a>
						<?php	echo '<p>' . $row['exhibition_name'] . '</p>';
							echo '<p>' . $row['gallery'] . '</p>';
							echo '<p>From ' . $row['exhibition_date_from'] . ' to ' . $row['exhibition_date_to'] . '</p>';
						}

					}

				?>
			
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('tl_gallery_thumb'); ?></a>
			
				<p><?php the_field('artists_name'); ?></p>
				<p><a href="<?php the_permalink() ?>"><?php the_title();?></a></p>
				<p class="theDate"><?php the_field('date_from'); ?> - <?php the_field('date_to'); ?></p>
				<?php if (!empty($openNight)) { ?><p class="openNight">Opening Night  <?php the_field('opening_night'); ?></p><?php } ?>
				<a href="<?php the_permalink() ?>"><p class="which_gall">NEST <?php the_sub_field('gallery');?></p></a>
				
			</div>
			
			<style type="text/css">
			
				div.togo_gall {
					display: none;
				}
			
			</style>
				
			<?php //} ?>
			
			<?php endwhile; ?>
			
			<div class="togo_gall">
			
				<p><img src="<?php bloginfo('template_directory'); ?>/images/no-exhibitions-gal.jpg"></p>
			
			</div>
		
		</div><!--end gall_top_left-->
		
		<div class="gall_top_right">
		
			<?php
				$args = array( 'post_type' => 'exhibitions', 'meta_key' => 'which_gallery', 'meta_value' => 'Pop Up', 'numberposts' => 1);
				$loops = new WP_Query( $args );
				$count = 0;
					
				while ( $loops->have_posts() ) : $loops->the_post();
				
				$todays_date = date('d-m-Y');
				$start_date = get_field('date_from');
				$end_date = get_field('date_to');
				
				$today = strtotime($todays_date);
				$start = strtotime($start_date);
				$ended = strtotime($end_date);
				
				$openNight = get_field('opening_night');
								
			?>
			<?php
			
				if($today >= $start && $today <= $ended){
			
			?>
			
			<div class="individual_container" style="position: relative;">
			
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('tl_gallery_thumb'); ?></a>
			
				<p><?php the_field('artists_name'); ?></p>
				<p><a href="<?php the_permalink() ?>"><?php the_title();?></a></p>
				<p class="theDate"><?php the_field('date_from'); ?> - <?php the_field('date_to'); ?></p>
			    <?php if (!empty($openNight)) { ?><p class="openNight">Opening Night  <?php the_field('opening_night'); ?></p><?php } ?>
				<a href="<?php the_permalink() ?>"><p class="which_gall"><?php the_field('which_gallery');?></p></a>
				
			</div>
			<style type="text/css">
			
				div.togo_pop {
					display: none;
				}
			
			</style>
			
			<?php } ?>
			
			<?php endwhile; ?>
			
			<div class="togo_pop">
			
				<p><img src="<?php bloginfo('template_directory'); ?>/images/no-exhibitions-pop.jpg"></p>
			
			</div>
		
		</div><!--end gall_top_left-->
	
	
	<?php get_sidebar(); ?>	

<?php get_footer(); ?>