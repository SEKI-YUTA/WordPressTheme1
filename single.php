<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/archive_des/article_des.css">
  </head>
  <body>
    <?php get_template_part('include/header_nav'); ?>

    <main>
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <?php endwhile; endif; ?>
      </article>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>