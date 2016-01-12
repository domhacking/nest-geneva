<?php
/*
Template Name: Single Artist Page
*/
?>

<?php get_header(); ?>


<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="galTitle"><?php echo get_field('art_name'); ?></div>
<div class="galnavigation">
<li>
<?php previous_post('< %',
 'prev Artist', ''); ?>
</li>
<li>
<?php next_post('% > ',
 'next Artist', ''); ?>
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
			
				#menu-item-298 a{
       color:#9b74b3 !important;
       font-weight:bold;
}

#mainMenu.ddsmoothmenu .page_item.page-item-8 a{
        font-weight:bold;
        }
        


</style>
		
		<div class="left_artistpg">
		<div id="artistInfo">
		<?php
		
			$artistname = get_field('art_name');
			$artistname = strtolower($artistname);
			$artistname = str_replace(' ', '-', $artistname);
			//var_dump($artistname);
		?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
		<?php
				$args = array( 'post_type' => 'exhibitions', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				$count = 0;
				//echo $loop->request;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
					$gallArtist = get_field('artists_names');
					//var_dump($gallArtist);

					$todays_date = date('d-m-Y');
					$start_date = get_field('date_from');
					$end_date = get_field('date_to');
					
					$today = strtotime($todays_date);
					$start = strtotime($start_date);
					$ended = strtotime($end_date);
					
					$exVar = get_the_title();
					$exVar = strtolower($exVar);
					$exVar = str_replace(' ', '-', $exVar);
					
					$openNight = get_field('opening_night');
					
					$wGallery = get_field('which_gallery');
					$wGallery = strtolower($wGallery);
					$wGallery = str_replace(' ', '-', $wGallery);
					
					$newStartDate = date("d F Y", strtotime($start_date));
					
					$newEndDate = date("d F Y", strtotime($end_date));
					
					$newOpenNight = date("d F Y", strtotime($openNight));
						
					?>
					
					<?php
					
						if(get_field('artists_names')) {
							while(the_repeater_field('artists_names')) {
								$indartist = get_sub_field('artist_name');
								$indartist = strtolower($indartist);
								$indartist = str_replace(' ', '-', $indartist);
								
								if($indartist == $artistname) {

									?>									
									<div class="artistName">NEST <?php the_field('which_gallery'); ?></div>
									<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									<p><?php echo $newStartDate; ?> - <?php echo $newEndDate; ?></p>
									<?php 
									
								}
							}
										
						}
					?>
				<?php endwhile; ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		
		
		</div>
		<div class="about">ABOUT</div>
		<?php the_content(); ?>
		</div>
		
		<div class="right_artistpg">
		
			<?php the_post_thumbnail('artist_page_img'); ?>
		
		</div>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	
	<?php get_sidebar(); ?>	

<?php get_footer(); ?>