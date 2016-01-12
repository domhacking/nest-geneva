<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title>NEST Living Concept | A Living Story | Short Term Location of Fully Furnished Apartments and Gallery Spaces in the Heart of the Geneva Old City, Switzerland</title>
    <meta http-equiv="organisation" content="Nest Living Concept Sàrl">
    <meta http-equiv="description" content="NEST Living Concept offers short term location of fully furnished accomodations, apartments, offices and gallery spaces in the heart of Geneva, Switzerland">
    <meta http-equiv="keywords" content="accomodation, apartments, gallery, art spaces, pop up, rentals, short term rentals, renting, hotel, boutique hotel, B&B, bed & breakfast, rooms, appartments, flats, offices, lofts, furnished, furnished flats, furnished offices, living concept, living experience, SPA, restaurant, geneva, switzerland">
    <meta http-equiv="language" content="en">
    <meta http-equiv="author" content="c:lynk creative network sàrl | info@c-lynk.com">
    <meta name="identifier-URL" content="http://www.nest-geneva.ch">
    <meta name="URL" content="http://www.nest-geneva.ch/">
    <meta name="revisit-after" content="15 days">
    <meta name="category" content="">
    <meta name="publisher" content="Nest Living Concept sàrl">
    <meta name="copyright" content="Nest Living Concept sàrl">
    <meta name="robots" content="all, index, follow">
    <meta name="reply-to" content="info@nest-geneva.ch">
    <meta name="document-classification" content="">
    <meta name="document-rights" content="Copyrighted Work">
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/anythingslider.css" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.anythingslider.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/Futura_Std_400-Futura_Std_700.font.js"></script>
<!-- Cufon init -->
	<script type="text/javascript">
		<?php if(get_option('boldy_cufon')!="no"):?>
			Cufon.replace('h1, .newsPiece #category-40, #artistInfo .artistName, .theYears li a, .galTitle, .newsPiece .category-latest-news, #GalImages .name, .apartTitle, .apartnavigation, .galnavigation li, .newsTitle, .galleryTitle, .backButton, .sectionTitle , .newsPiece #category-38, .newsPiece #category-36, .aprtName ,.navigation, p.which_gall, #mainMenu ul li a, .homeTitle, .homeIntroComment, #homeContent .title, #contactArea .title, #secondLevelMenu li a,',{hover: true})('h2',{hover: true})('h3')('.reply',{hover:true})('.more-link');
		 <?php endif ?>
	</script>
	<script type="text/javascript">
			$(function() {
			$('div.sdvExp')
				.css("cursor","pointer")
				.attr("title","Click to expand/collapse")
				.click(function(){
					$(this).siblings('.child-'+this.id).toggle();
				});
			$('div[class^=child-]').hide();
		});
		</script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cycle.js" type="text/javascript"></script>
<script type="text/javascript">
 
$(document).ready(function(){
 
    $('#bg_containers').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
 
});
</script>
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31367801-1']);
  _gaq.push(['_setDomainName', 'nest-geneva.ch']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>	
</head>

<body class="<?php $parent_title = get_the_title($post->post_parent); $parent_title = strtolower($parent_title); $parent_title = str_replace(" ", "-", $parent_title); echo $parent_title;?>">
<!-- BEGINN MAINWRAPPER -->
<div id="mainWrapper">
<div id="bg_containers">
	<div class="bg1"></div>
	<div class="bg2"></div>
	<div class="bg3"></div>
</div>
<div id="innerWrapper">
	<!-- BEGIN WRAPPER -->
    <div id="wrapper">
		<!-- BEGIN HEADER -->
        <div id="header">
            <div id="logo">
            
            <?php

  $pagecat= get_field('page_category');
  
  if ( $pagecat == 'living' ) { ?>
  
      <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-living.png" alt="<?php echo get_option('boldy_logo_alt'); ?>" /></a>
  
  <?php } elseif ( $pagecat == 'gallery' ) { ?>
  
      <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-gallery.png" alt="<?php echo get_option('boldy_logo_alt'); ?>" /></a>
  
  <?php } elseif ( $pagecat == 'home' ) { ?>
  
      <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php echo get_option('boldy_logo_alt'); ?>" /></a>
  
  <?php } else { ?>
  
      <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php echo get_option('boldy_logo_alt'); ?>" /></a>
  
  <?php }

?></div>
            
            
			
			<div id="headMenu">
			<div class="sdvExp" id="div1">SEARCH</div>
			<div class="child-div1">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Head Menu')) : ?>
[ do default stuff if no widgets ]
<?php endif; ?></div></div>
<div id="headerRight">
			<ul>
			<li><a href="<?php bloginfo('url'); ?>/?cat=3">LATEST NEWS</a></li>
			
			</ul>
			</div>
			<!-- BEGIN MAIN MENU -->
			<?php if ( function_exists( 'wp_nav_menu' ) ){
					wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'mainMenu', 'container_class' => 'ddsmoothmenu', 'fallback_cb'=>'primarymenu') );
				}else{
					primarymenu();
			}?>
            <!-- END MAIN MENU -->
			
        </div>
        <!-- END HEADER -->
		
		<!-- BEGIN CONTENT -->
		<div id="content">
		