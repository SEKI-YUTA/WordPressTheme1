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

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home-sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div id＝"%1$s" class＝"%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}

function add_stylesheet() {
  wp_register_style(
      'main',
      get_template_directory_uri().'/css/main.css',
      array(),
      '1.0',
      false
  );
  wp_register_style(
      'header',
      get_template_directory_uri().'/css/header.css',
      array(),
      '1.0',
      false
  );
  wp_register_style(
      'footer',
      get_template_directory_uri().'/css/footer.css',
      array(),
      '1.0',
      false
  );
  wp_enqueue_style(
      'widget',
      get_template_directory_uri().'/css/widget/widget_style.css',
      array('reset'),
      '1.0',
      false
  );
}

add_action('wp_enqueue_scripts', 'add_stylesheet');
add_action('init','init_func');
add_filter('register_post_type_args','post_has_archive',10,2);
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>