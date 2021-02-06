
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php get_header(); ?>
</head>
<body>
  <div class="contact_title">
    <h1>お問い合わせフォーム</h1>
  </div>
<div class="form_container">
  <?php echo do_shortcode('[contact-form-7 id="2318" title="コンタクトフォーム 1"]'); ?>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>