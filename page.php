<?php get_header(); ?>

<h2 class="page-title"><?php echo get_the_title(); ?></h2>
<div><?php post_loop( 'page' ); ?></div>

<?php get_footer(); ?>
