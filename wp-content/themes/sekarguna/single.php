<?php get_header('page'); ?>

  <div class="container">
    <h1 class="text-helper use-text-title"><?php the_title();  ?></h1>
    <div class="img-featured-post">
      <?php the_post_thumbnail('medium_large'); ?>
    </div>
    <h5 class="subtitle use-text-subtitle2"><?php the_content(); ?></h5>
  </div>

<?php get_footer(); ?>
