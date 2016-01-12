<?php
/*
Template Name: Gallery Booking
*/
?>

<?php get_header(); ?>

<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>

	<?php 
		
		$mpvar = get_the_title();
		
		$mpvar = strtolower($mpvar);
		
		$mpvar = str_replace(" ", "-", $mpvar);
		
	?>


	
		
		<?php if($mpvar == 'bookings') { ?>
		
			<script type="text/javascript">
		
				$(document).ready(function(){
					
					$('table.calendar-table tbody tr td span.event span.calnk').each(function(){
					
						var colour = $(this).children().attr('class');
						
						if(colour == 'pop-up' ) {
						
							$(this).closest('td').addClass('sam');
						
						}
						
						if(colour == 'gallery' ) {
						
							$(this).closest('td').addClass('kitson');
						
						}
					
					});
					
					$('table.calendar-table tbody tr td span.event span.calnk a, table.calendar-table tbody tr td span.event').empty();
				
				});
				
			</script>
			
			<style type="text/css">
			
				div.cal_rght {
					width: 410px;
					float: right;
				}
				
				div#wrapper div#content div div.cal_rght table.calendar-table tbody tr td.sam {
					background-color: #6E2A8D !important;
				}
				
				div#wrapper div#content div div.cal_rght table.calendar-table tbody tr td.kitson {
					background-color: #8f6b9f !important;
				}
				
				div#wrapper div#content div div.cal_rght table.calendar-table tbody tr td.sam.kitson {
					background: url(<?php bloginfo('template_directory'); ?>/images/bkng.gif) repeat-x 0px center !important;
				}
				
				td.calendar-heading, td.normal-day-heading {
					background: none;
					border: none;
					text-align: center;
					vertical-align: middle;
				}
				
				td.calendar-heading {
					border: 1px solid #ffffff;
				}
				
				td.weekend-heading {
					background: none;
					border: none;
					color: #ffffff;
				}
				
				td span.weekend {
					color: #ffffff;
				}
				
				td.day-without-date, td.current-day, td.day-with-date {
					border: none;
					text-align: center;
					vertical-align: middle;
				}
				
				table.cat-key {
					border: none !important;
					border-top: 1px solid #ffffff !important;
				}
				
				table.calendar-table tbody tr td div {
					width: 100%;
					height: 100%;
					vertical-align: middle;
				}
				
				
#menu-item-300 {
		font-weight:bold;
		}

			
			</style>
		
		<?php } ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	
	<?php get_sidebar(); ?>	
</div>
<?php get_footer(); ?> 