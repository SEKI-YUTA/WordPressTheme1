<?php

function init_func() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  set_post_thumbnail_size(896,300,true);
  register_post_type('news',
  array(
    'labels' => array(
      'name' => '新着情報',
      'singular_name' => '新着情報',
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'show_in_rest' => true,
  ));
}

function post_has_archive($args,$post_type) {
  if('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs';
  }
  return $args;
}
add_action('init','init_func');
add_filter('register_post_type_args','post_has_archive',10,2);


?>