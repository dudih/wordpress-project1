<?php

	// Styles
	wp_enqueue_style('home');
	get_header();

	the_title();
	the_content();

	// Scripts
	wp_enqueue_script('home');
	wp_enqueue_style('myfooter');
	get_footer();
