
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php get_header(); ?>
  <?php get_template_part('include/bootstrap'); ?>
  <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/style.css">
</head>
<body>
<div class="w-100 p-3">
  <?php echo do_shortcode('[contact-form-7 id="15" title="お問い合わせ"]'); ?>
</div>
  <footer>
    <p>yuta seki,2021 All rights reserved</p>
  </footer>
<?php wp_footer(); ?>

</body>
</html>