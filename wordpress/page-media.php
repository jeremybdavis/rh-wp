<?php
/*
  Template Name: Media
*/
?>

<?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p><?php the_content(); ?></p>

  <?php endwhile; else : ?>
     <p><?php _e( 'Sorry, no content matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>

</main>
