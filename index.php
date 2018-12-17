<?php get_header(); ?>

  <?php get_sidebar(left); ?>

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content', get_post_format() );

    endwhile; ?>
    	<ul class="pager">
    		<li><?php previous_posts_link( 'Nyere nyheder' ); ?></li>
        <li><?php next_posts_link( 'Ældre nyheder' ); ?></li>
    	</ul>
    <?php endif;
    ?>

		<?php get_sidebar(right); ?>

<?php get_footer(); ?>
