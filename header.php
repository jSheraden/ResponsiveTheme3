<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container-fluid">
    <div class="site-header">
      <div class="site-title">
	    <h1><?php bloginfo( 'name' ); ?></h1>
		<div class="site-nav">
	      <a href="<?php echo get_permalink( get_page_by_title( 'Home' ) ); ?>" title="Home">
	        <button type="button" id="home-btn" class="btn btn-default btn-lg" aria-label="Left Align">
              <span class="glyphicon glyphicon-home"></span>
            </button>
		  </a>
		  <a href="<?php echo get_permalink( get_page_by_title( 'Blog' ) ); ?>" title="Blog">
	        <button type="button" id="blog-btn" class="btn btn-default btn-lg" aria-label="Left Align">
	          <span class="glyphicon glyphicon-th-list"></span>
            </button>
		  </a>
		  <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" title="Contact Us">
	        <button type="button" id="contact-btn" class="btn btn-default btn-lg" aria-label="Left Align">
	          <span class="glyphicon glyphicon-earphone"></span>
            </button>
		  <a href="<?php echo get_permalink( get_page_by_title( 'Search' ) ); ?>" title="Search">
	        <button type="button" id="search-btn" class="btn btn-default btn-lg" aria-label="Left Align">
	          <span class="glyphicon glyphicon-search"></span>
            </button>
		  </a>
		</div>
	  </div>
	</div>
	
	<div class="container page-content">
	