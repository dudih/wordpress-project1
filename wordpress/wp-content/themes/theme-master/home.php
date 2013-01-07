<?php

	// Styles
	wp_enqueue_style('general');
	wp_enqueue_style('home');
	get_header();

	// The content
	// get_template_part('content/home/featured');

	// Scripts
	wp_enqueue_script('home');
	wp_enqueue_style('myfooter');
	get_footer();
