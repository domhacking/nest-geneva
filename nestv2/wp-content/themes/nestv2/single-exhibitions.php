<?php
/*
Template Name: Single Artist Page
*/
?>

<?php get_header(); ?>
<style type="text/css">

#menu-item-303 a{
        font-weight:bold;
   
}

#menu-item-305 a, #menu-item-304 a, #menu-item-315 a{
        font-weight:normal !important;
   
}

#menu-item-305 a:hover, #menu-item-304 a:hover, #menu-item-315 a:hover{
        font-weight:bold !important;
   
}
				
			</style>

<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery Children')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="galTitle">NEST <?php the_field('which_gallery'); ?></div>
<div class="galnavigation">
<li>
<?php previous_post('< %',
 'previous exhibition', ''); ?>
</li>
<li>
<?php next_post('% > ',
 'next exhibition', ''); ?>
</li>
</div> <!-- end navigation -->
		
			<script type="text/javascript">
		
				$(document).ready(function(){
				
					
				
				});
				
			</script>
			
			<style type="text/css">
			
				
			
				div.left_artistpg {
					width: 250px;
					float: left;
				}
				
				div.right_artistpg {
					width: 630px;
					float: right;
				}
				
				#menu-item-303 a{
       color:#9a74b2 !important;
}

#menu-item-304 a, #menu-item-305 a, #menu-item-315 a{
       color:#ccc !important;
}

#mainMenu.ddsmoothmenu .page_item.page-item-8 a{
		color:#9a74b2 !important;
		font-weight:bold !important;
   
}
		
			
#bg_containers {position:absolute; left:0px; top:0px; width:100%; margin:0; z-index:1; background:#000;}
#bg_containers div {width:100%; height:586px; margin:0 auto; background:#000;}
.nest-gallery #bg_containers .bg1 {background:url(images/purple-dots.png) no-repeat; background-position:right 190px !important;}
.nest-gallery #bg_containers .bg2 {background:url(images/purple-dots.png) no-repeat;background-position:left !important;}
.nest-gallery #bg_containers .bg3 {background:url(images/purple-dots.png) no-repeat;background-position:left 390px !important;}
			
			
</style>
		
		<div class="left_artistpg">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
		<div id="artistInfo">
			
			<?php
			
				if(get_field('artists_names')) {
					
					while(the_repeater_field('artists_names')) { ?>
						
						<?php
							$artistVar = get_sub_field('artist_name');
							$artistVar = strtolower($artistVar);
							$artistVar = str_replace(' ', '-', $artistVar);
						?>
						
						<div class="artistName"><a href="http://www.nest-geneva.ch/nestv2/?artists=<?php echo $artistVar; ?>"><?php the_sub_field('artist_name'); ?></a></div>
						
					<?php }
					
				}
			
			?>
			
			<div class="artistTitle"><?php the_title(); ?></div>
			
			<div class="which"><?php //the_field('which_gallery'); ?></div>
			
			<div class="theDates"><?php the_field('date_from');?> - <?php the_field('date_to');?></div>
			
			<p class="openNight">Opening Night :  <?php the_field('opening_night'); ?></p>
			</div>
		
			<div class="about">ABOUT</div>
			<?php the_content(); ?>
		
			</div>
		
			<div class="right_artistpg">
		
				<?php the_post_thumbnail('artist_page_img'); ?>
		<div class="extraPics"><?php the_field('exhibition_images'); ?></div>
			</div>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	
	<?php get_sidebar(); ?>	

<?php get_footer(); ?>