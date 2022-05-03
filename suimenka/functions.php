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
JSファイルの読み込み
**************************************************/
// function my_scripts() {
//   if ( !is_admin() ) { // 管理画面以外で適用する

//       // WP同封のjQueryを読み込ませない
//       wp_deregister_script('jquery');

//       // CDNのjQueryを読み込む
//       wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array(),null, true);

//       // テーマフォルダ→jsフォルダ→config.jsをフッターに読み込む（クエリパラメーター自動更新付）
//       wp_enqueue_script('config',esc_url(get_theme_file_uri('/js/main.js')), array('jquery'),date('ymdHi',filemtime( get_theme_file_path('/js/main.js'))), true);
//   }
// }
// add_action( 'wp_enqueue_scripts', 'my_scripts', 50 );



register_post_type(
'works',
  array(
  // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail')
  )
);

add_theme_support( 'post-thumbnails' );