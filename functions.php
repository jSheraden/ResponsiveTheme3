<?php

function theme_resources() {
	/*
	wp_register_script(
		'jquery',
		get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js'
	);
	
	wp_register_script(
		'bootstrap',
		get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js'
	);
	
	wp_enqueue_script(
		'theme-scripts',
		get_template_directory_uri() . '/js/script.js',
		array( 'jquery', 'bootstrap' )
	);

	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
	*/
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'theme_resources' );

// Display the header navigation menu.
function get_responsive_menu() {
    $args = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'ul',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu nav navbar-nav navbar-right',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
    );
    
    wp_nav_menu($args);
}

function post_loop($content_type) {
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			get_template_part('content', $content_type);
		}
	}
}

?>
