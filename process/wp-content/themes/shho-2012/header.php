<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?></title>
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width">
		
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/library/js/libs/jquery-1.5.1.min.js"></script>	

		<script type="text/javascript" src="<?php bloginfo('template_url')?>/library/js/libs/responsiveslides.js"></script>	
		
		<script>
    $(function () {

      // Slideshow 1
      $("#featured").responsiveSlides({
        speed: 3200
      });

    });
  </script>
				<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header role="banner" class="header">
			
				<div id="inner-header" class="wrap">
				
					<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow" title="home"><img src="<?php bloginfo('template_url')?>/library/images/symbol_white.png"></a>
					<div class="twitter">Tweet tweet</div>
					<nav role="navigation" class="nav">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->

		<section class="cover" id="title-page">

		
		        <div id="background-cover" class="spread"  > 
		        <ul id="featured">			
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_berkeley.jpg" /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_fists.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_fritz.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_gas.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_grads.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_library.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_nude.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_rebels.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_revolution.jpg"  /></li>
					<li><img   src="<?php bloginfo('template_url')?>/library/images/homepage_background_speech.jpg"  /></li>
				</ul>
	
		
		</div>				 

		</section>
