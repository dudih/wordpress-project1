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
	wp_enqueue_script('fancybox');
	wp_enqueue_style('myheader');

	wp_head();
	?>
</head>
<body <?php body_class(); ?>>
	<div class="header-widget">
		<div class="header-widget-contnet layout">
			<div class="left-side">
				<?php

				$args = array(
					'posts_per_page' => 3,
					'post_type' => 'post',
					'order' => 'DESC',
					'order_by' => 'title',
					);

				$Home = new WP_Query( $args );
				$imagesArray =  array();

				while( $Home->have_posts() ) {
					$Home->the_post();
					$post_id = get_the_ID();
					$titiele = get_the_title();
					$imagesArray[] = wp_get_attachment_url( get_post_thumbnail_id( $post_id ) );

					echo '<h1 class="content-item">' . $titiele . '</h1>';
					?><div class="details"><?php
					echo get_the_content();
					?></div><?php

					$permalink = get_permalink();
					?><a href="<?php echo $permalink; ?>" class="learn-more">Learn More</a>
				<?php } ?>

			</div>
			<div class="right-side">
				<?php foreach ($imagesArray as $value) { ?>
				<div class="before-widget"></div>
				<img class="widget" src="<?php echo $value; ?>" />
				<div class="after-widget"></div>
				<?php } ?>
			</div>
			<div class="header-transperant">
				<a href="#" class="scroller scroll-up"></a>
				<a href="#" class="scroller scroll-down"></a>
			</div>
		</div>
	</div>
	<div class="header-widget-shadow"></div>
	<div id="header">		<!-- black toolbar-->
		<div class="header-contant layout">	<!-- content of black header -->
			<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
		</div>
	</div>
	<div class="header-shadow"></div>
	<div class="header-widget-up-shadow"></div>		<!-- the shadow over the blue background-->

	<?php wp_enqueue_script('myheader'); ?>