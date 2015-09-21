<?php get_header(); ?>

<h2 class="page-title">Blog</h2>

<div><?php post_loop( get_post_format() ); ?></div>

<?php get_footer(); ?>
