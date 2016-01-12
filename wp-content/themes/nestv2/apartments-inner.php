<?php
/*
Template Name: apartments-inner
*/
?>
<?php get_header(); ?>

<style>
.aprtName a{
		color:#fff;
}

#menu-item-288 a {
		font-weight:bold;
		}

		#menu-item-290 a, #menu-item-291 a {
		font-weight:normal;
		}

		#menu-item-289 a {
		font-weight:bold;
		}

		#menu-item-289 a:hover, #menu-item-290 a:hover, #menu-item-291 a:hover {
		font-weight:bold;
		}

</style>

<!-- begin colLeft -->
<div id="secondLevelMenu"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sub Menu Living Children')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div>
	<div id="appcolInner">
<?php
  query_posts( array( 'order' => 'ASC', 'post_type' => 'studio', 'showposts' => 12 ) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

  <div class="applisting">
  <div class="listingImage"><a href="<?php the_permalink() ?>"><img src="<?php the_field('listing_image'); ?>"></a></div>
  <div class="listingTitle"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
  <div class="listingSize"><?php the_field('apartment_size'); ?></div>
  <div class="address"><?php the_field('apartment_address'); ?></div>
  </div>

<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- end colleft -->


<?php get_footer(); ?>
