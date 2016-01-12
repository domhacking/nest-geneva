<?php
/*
Template Name: Artists Page
*/
?>

<?php get_header(); ?>


<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Gallery')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
		
			<script type="text/javascript">
		
				$(document).ready(function(){
				
					var slider1 = ['ALL', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
					function formatText(index, panel){
						return slider1[index - 1];
					}
					
					$('#artist_slider').anythingSlider({
						width: 600,
						height: 300,
						resizeContents: false,
						buildNavigation: true,
						buildArrows: false,
						hashTags: false,
						navigationFormatter: formatText
					});
					
					$('div.pic_holder ul li:not(:last-child)').hide();
					
					$('ul#artist_slider li.panel h4').hover(
					
						function(){
					
							var curr_art = $(this).attr('class');
							
							$('div.pic_holder ul li').hide();
							
							$('div.pic_holder ul li.'+curr_art).show();
						
						},
						function() {
						
							var curr_art = $(this).attr('class');
							
							
					
						}
					);
				
				});
				
			</script>
			
			<style type="text/css">
			
				div.pic_holder {
					float: right;
					width: 200px;
					height: 200px;
					position: relative;
					top:23px;
				}
				
				div.pic_holder img {
					display: block;
					position: absolute;
					top: 0px;
					left: 0px;
				}
				
				div.anythingSlider div.anythingWindow ul#artist_slider.anythingBase li.panel h4 {
					float: left;
					width: 300px;
				}
												
			 #menu-item-298 a{
		    font-weight:bold;
            }
			
			</style>
		
		
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
		
		<ul id="artist_slider">
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'meta_key' => 'alpha_listing', 'order' => 'asc', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				$count = 0;
				//echo $loop->request;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'a' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'b' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'c' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'd' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'e' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'f' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'g' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'h' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'i' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'j' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'k' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'l' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'm' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'n' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'o' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'p' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'q' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'r' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 's' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 't' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'u' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'v' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'w' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'x' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'y' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		<li>
		
			<?php
				$args = array( 'post_type' => 'artists', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => -1, 'meta_key' => 'alpha_listing', 'meta_value' => 'z' );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$artistclass = get_field('art_name');
				$artistclass = strtolower($artistclass);
				$artistclass = str_replace(" ", "-", $artistclass );
				
			?>
			
			<h4 class="<?php echo $artistclass; ?>"><a href="<?php the_permalink() ?>"><?php echo get_field('art_name'); ?></a></h4>
			
			<?php endwhile; ?>
		
		</li>
		
		</ul>
		
		<div class="pic_holder">
		
			<ul>
			
			<?php
				$args = array( 'post_type' => 'artists', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				$count = 0;
					
				while ( $loop->have_posts() ) : $loop->the_post();
				
				$imgclass = get_field('art_name');
				$imgclass = strtolower($imgclass);
				$imgclass = str_replace(" ", "-", $imgclass );
				
			?>
			
			<li class="<?php echo $imgclass; ?>">
			
			<?php the_post_thumbnail('artist_list_thumb'); ?>
			
			<?php endwhile; ?>
			
			</li>
			
			</ul>
		
		</div>
	
	<?php get_sidebar(); ?>	

<?php get_footer(); ?>