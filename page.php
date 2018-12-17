<?php get_header(); ?>

  <?php get_sidebar(left); ?>

  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content-page', get_post_format() );
    endwhile; endif;
  ?>

	<?php get_sidebar(right); ?>

<?php get_footer(); ?>
