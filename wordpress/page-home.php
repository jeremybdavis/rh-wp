<?php
/*
  Template Name: Home
*/
?>

<?php get_header(); ?>

<main>

  <div class="hero">
    <?php wd_slider(1); ?>
  </div>

  <section class="bio">
    <div class="bio-content">
      <h1>ROBYN HARRIS</h1>
      <h2>Bio //</h2>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p><?php the_content(); ?></p>

      <?php endwhile; else : ?>
         <p><?php _e( 'Sorry, no content matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <img src="wp-content/themes/robynharris/img/rh2.jpg" alt="" />
  </section>

  <section class="contact">

    <h2>Contact //</h2>

    <ul class="social">
      <li><a href="mailto:robynharrismusic@gmail.com"><i class="fa fa-envelope fa-2x"></i></a></li>
      <li><a href="http://www.facebook.com/itsrobynharrismusic/"><i class="fa fa-facebook fa-2x"></i></a></li>
      <li><a href="http://twitter.com/robynhmusic"><i class="fa fa-twitter fa-2x"></i></a></li>
      <li><a href="http://instagram.com/robynharrismusic/"><i class="fa fa-instagram fa-2x"></i></a></li>
      <li><a href="http://www.youtube.com"><i class="fa fa-youtube-play fa-2x"></i></a></li>
    </ul>

  </section>

<?php get_footer(); ?>
