<?php
/*
Template Name: Exhibitions Past
*/
?>

<?php get_header(); ?>


<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery Children')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="theYears">
	<li class="twelve"><a href="<?php bloginfo('url'); ?>/?page_id=506">2012</a></li>
	<li class="eleven"><a href="<?php bloginfo('url'); ?>/?page_id=504">2011</a></li>
	<li class="ten"><a href="<?php bloginfo('url'); ?>/?page_id=1054">2010</a></li>
</div>

	<?php 
		
		$mpvar = get_the_title();
		
		$mpvar = strtolower($mpvar);
		
		$mpvar = str_replace(" ", "-", $mpvar);
		
	?>


	
		
		
		
			<script type="text/javascript">
		
				$(document).ready(function(){
				
					
				
				});
				
			</script>
			
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
				
								#menu-item-305 a{
		font-weight:bold;
}
				
				#menu-item-303 a {
		font-weight:bold;
}
				

#menu-item-315 a, #menu-item-304 a {
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
				$args = array( 'post_type' => 'exhibitions', 'posts_per_page' => -1, 'meta_key' => 'date_from', 'orderby' => 'meta_value_number', 'order' => 'asc');
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$todays_date = date('d-m-y');
				$start_date = get_field('date_from');
				$end_date = get_field('date_to');
				
				$today = strtotime($todays_date);
				$start = strtotime($start_date);
				$end = strtotime($end_date);
				
				$openNight = get_field('opening_night');
				
				$wGallery = get_field('which_gallery');
				$wGallery = strtolower($wGallery);
				$wGallery = str_replace(' ', '-', $wGallery);
				
				$newStartDate = date("d F Y", strtotime($start_date));
				
				$newEndDate = date("d F Y", strtotime($end_date));
				
				$newOpenNight = date("d F Y", strtotime($openNight));
								
			?>
			
			<?php
			
				if($today > $end && $wGallery == 'gallery'){
			
			?>
			
			<div class="individual_container" style="position: relative;">
			
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('tl_gallery_thumb'); ?></a>
			
				<?php

					if(get_field('artists_names')) {

						while(the_repeater_field('artists_names')) {
							$indartist = get_sub_field('artist_name');?>
							<p><?php echo $indartist; ?></p>
						<?php }
							
					}?>
				
				<a href="<?php the_permalink() ?>"><p><?php the_title();?></p></a>
				<p class="theDate"><?php echo $newStartDate; ?> - <?php echo $newEndDate; ?></p>
			    <?php if (!empty($openNight)) { ?><p class="openNight">Opening Night <?php echo $newOpenNight; ?></p><?php } ?>
				<p class="which_gall"><a href="<?php the_permalink() ?>"><?php the_field('which_gallery');?></a></p>
			
			</div><!--end individual_container-->
			
			<style type="text/css">
			
				div.togo_gall {
					display: none;
				}
			
			</style>
			
			
			<?php } ?>
			
			
			<?php endwhile; ?>
			
			<div class="togo_gall">
			
				<p><img src="<?php bloginfo('template_directory'); ?>/images/no-exhibitions-gal.jpg"></p>
			
			</div>
		
		</div><!--end gall_top_left-->
		
		<div class="gall_top_right">
		
			<?php
				$args = array( 'post_type' => 'exhibitions', 'posts_per_page' => -1, 'meta_key' => 'date_from', 'orderby' => 'meta_value_number', 'order' => 'asc');
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$todays_date = date('d-m-Y');
				$start_date = get_field('date_from');
				$end_date = get_field('date_to');
				
				$today = strtotime($todays_date);
				$start = strtotime($start_date);
				$end = strtotime($end_date);
				
				$openNight = get_field('opening_night');
				
				$wGallery = get_field('which_gallery');
				$wGallery = strtolower($wGallery);
				$wGallery = str_replace(' ', '-', $wGallery);
				
				$newStartDate = date("d F Y", strtotime($start_date));
				
				$newEndDate = date("d F Y", strtotime($end_date));
				
				$newOpenNight = date("d F Y", strtotime($openNight));
								
			?>
			<?php
			
				if($today > $end && $wGallery == 'pop-up'){
			
			?>
			
			<div class="individual_container" style="position: relative;">
			
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('tl_gallery_thumb'); ?></a>
			
				<?php

					if(get_field('artists_names')) {

						while(the_repeater_field('artists_names')) {
							$indartist = get_sub_field('artist_name');?>
							<p><?php echo $indartist; ?></p>
						<?php }
							
					}?>
				
				<a href="<?php the_permalink() ?>"><p><?php the_title();?></p></a>
				<p class="theDate"><?php echo $newStartDate; ?> - <?php echo $newEndDate; ?></p>
			    <?php if (!empty($openNight)) { ?><p class="openNight">Opening Night <?php echo $newOpenNight; ?></p><?php } ?>
				<p class="which_gall"><a href="<?php the_permalink() ?>"><?php the_field('which_gallery');?></a></p>
			
			</div><!--end individual_container-->
			
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