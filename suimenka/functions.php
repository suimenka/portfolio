<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
Worksサムネ表示
**************************************************/
register_post_type(
'works',
  array(
  // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail')
  )
);

add_theme_support( 'post-thumbnails' );