<?php
/*
Template Name: Single Nest Artist Page
*/
?>

<?php get_header(); ?>


<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
<div class="galTitle"><?php the_title(); ?></div>
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
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<?php	$rows = get_field('exhibitions');
			if($rows)
			{
				

				foreach($rows as $row)
				{
					echo '<p>' . $row['exhibition_name'] . '</p>';
					echo '<p>' . $row['gallery'] . '</p>';
					echo '<p>From ' . $row['exhibition_date_from'] . ' to ' . $row['exhibition_date_to'] . '</p>';
				}

				
			}
		
		?>
		
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