<?php
/*
Template Name: Portrait
*/

get_header();

?>

<div id="primary" class="site-content">
  <div id="content" role="main" class="portraitPage">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>