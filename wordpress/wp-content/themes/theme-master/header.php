<!DOCTYPE HTML>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); ?></title>
	<link rel="icon" href="<?php echo bloginfo('template_directory'); ?>/images/icon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/icon.ico" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
	<meta name="viewport" content="width=device-width" />
	<?php

	wp_enqueue_script('modernizr');
	wp_enqueue_style('myheader');

	wp_head();

	?>
</head>
<body <?php body_class(); ?>>
	<div id="header">
		<div class="header-contant layout">
			<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
		</div>
	</div>
	<div class="header-shadow"></div>
<!-- <ul class="main-menu">
	<?php
		// wp_nav_menu( array(
		// 	'menu'            => 'Main Menu',
		// 	'container'       => '',
		// 	'items_wrap'      => '%3$s',
		// 	'fallback_cb'     => false,
		// 	'depth'           => 4
		// ));
	?>
</ul> -->
	<div class="header-widget">
		<div class="header-widget-contnet layout">
			<div class="left-side">
<?php for($i=1; $i<=3; $i++) { ?>
				<h1 class="content-item">Content Item #<?php echo $i ?></h1>
				<div class="details">
					For developers, the Android 3.1 platform is
					available as a downloadable component for
					the Android SDK. The downloadable platform
					includes an Android library and system
					image, as well as a set of emulator skins and
					more. The downloadable platform includes
					no external libraries.
				</div>
				<a href="#" class="learn-more">Learn More</a>			
<?php } ?>	<!--End for-->
			</div>	
			<div class="right-side">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/theme/header/layer2/widget-pictures/widget-picture-01.png" />
			</div>		
		</div>			
	</div>
	<div class="header-widget-shadow"></div>