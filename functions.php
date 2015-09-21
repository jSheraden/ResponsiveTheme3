<?php

function theme_resources() {
	wp_register_script(
		'bootstrap',
		get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js'
	);
	
	wp_enqueue_script(
		'theme-scripts',
		get_template_directory_uri() . '/js/script.js',
		array( 'bootstrap' )
	);

	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_resources' );

function post_loop( $content_type ) {
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', $content_type );
		}
	} else {
		echo '<p>No content found.</p>';
	}
}

?>
