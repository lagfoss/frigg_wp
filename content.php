
  <section class="artikel">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_date(); ?> Skrevet af <?php the_author(); ?></a></p>
  <?php if ( has_post_thumbnail() ) {?>
  	<div class="row">
  		<div class="thumbnail">
  			<?php	the_post_thumbnail('thumbnail'); ?>
  		</div>
  		<div class="front_cont">
  			<?php the_excerpt(); ?>
  		</div>
  	</div>
  	<?php } else { ?>
  	<?php the_excerpt(); ?>
  	<?php } ?>
</section>
