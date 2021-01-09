<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>
<body>
  <?php get_template_part('include/header_nav'); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
  <?php endwhile; endif; ?>
  </main>

  <?php get_sidebar(); ?>
  <?php wp_footer(); ?>
</body>
</html>