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
			<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a> <?php bloginfo('description'); ?>
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
			dkfjgds fjghdsfkg hkfdjgh kh
		</div>
	</div>
	<div style="border:1px solid red;" class="header-widget-shadow"></div>