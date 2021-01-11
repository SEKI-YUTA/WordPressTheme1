<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header() ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/archive_post/archive_post.css">
  </head>

  <body>
    
    <?php get_template_part('include/header_nav'); ?>
    <main>
      <div class="main_container_arc">
        <section class="resent_posts_arc">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
          <article class="resent_post_arc border">
            <div class="img_wrapper">
              <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/nophoto.png" alt="">
              <?php } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/backdrop-filter.png" alt="記事の画像">
            </div>
            <div class="article_content">
              <div class="title"><h2><?php the_title(); ?></h2></div>
              <div class="text">
                <p><?php the_excerpt(); ?></p>
              </div>
              <div class="more_button"><a href="<?php the_permalink(); ?>">詳しく見る</a></div>
            </div>
          </article>
        <?php endwhile; endif; ?>
        </section>
      </div>

    </main>

    <footer>
      <p>yuta seki,2021 All rights reserved</p>
    </footer>
    
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>