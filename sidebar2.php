<aside>
      <?php get_search_form(); ?>

      <!-- <div class="popular_posts border">
        <div class="sec_title">
          <h2 class="popular_ranking"><i class="fas fa-crown"></i>人気記事ランキング</h2>
        </div>
        <div class="content">
          <div class="post">
            <span class="rank">
              <i class="fas fa-crown" style="color: gold;"></i>
            </span>
            <div class="title">
              <p>記事タイトル。記事タイトル。</p>
            </div>
          </div>
          <div class="post">
            <span class="rank">
              <i class="fas fa-crown" style="color: silver;"></i>
            </span>
            <div class="title">
              <p>記事タイトル。記事タイトル。</p>
            </div>
          </div>
          <div class="post">
            <span class="rank">
              <i class="fas fa-crown"></i>
            </span>
            <div class="title">
              <p>記事タイトル。記事タイトル。</p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="profile border">
        <?php
        $path = get_avatar(get_the_author_meta('ID'));
        ?>
        <div class="img_wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ErCmxhOVkAAhC97.png" alt="">
        </div>
        <p class="myname"><?php the_author_meta('display_name'); ?></p>
        <p class="myintro"><?php the_author_meta('user_description'); ?></p>
        <p></p>
      </div>

      <!-- <div class="posted_month border">
        <ul>
          <li><a href="">2021/1</a></li>
          <li><a href="">2020/12</a></li>
          <li><a href="">2020/11</a></li>
          <li><a href="">2020/10</a></li>
          <li><a href="">2020/9</a></li>
          <li><a href="">2020/8</a></li>
          <li><a href="">2020/7</a></li>
          <li><a href="">2020/6</a></li>
          <li><a href="">2020/5</a></li>
          <li><a href="">2020/4</a></li>
          <li><a href="">2020/3</a></li>
          <li><a href="">2020/2</a></li>
          <li><a href="">2020/1</a></li>
        </ul>
      </div> -->
    </aside>