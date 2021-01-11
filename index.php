<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header() ?>
  </head>
<body>
  
  <?php get_template_part('include/header_nav'); ?>
  <main>
    <div class="main_container">
      <section class="resent_posts">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <article class="resent_post border">
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
            <div class="more_button"><a href="<?php the_permalink(); ?>">詳しく見る</a>
            </div>
            <table class="description">
              <tr>
                <th>投稿日</th>
                <td><?php the_date('Y/m/d'); ?></td>
              </tr>
              <tr>
                <th>投稿者</th>
                <td><?php the_author(); ?></td>
              </tr>
            </table>
          </div>
        </article>
      <?php endwhile; endif; ?>
        <div class="pager">
          <span>
            <?php previous_posts_link(); ?>
          </span>
          <span>
            <?php next_posts_link() ?>
          </span>
        </div>
      </section>
    </div>

    <?php get_sidebar(); ?>
  </main>

  <?php get_footer(); ?>
  
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

  <?php wp_footer(); ?>
</body>
</html>