<?php
/**
* テーマのセットアップ
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成

}
add_action('after_setup_theme', 'my_setup');


/**
* CSSとJavaScriptの読み込み
*
*/
function my_script_init()
{
  wp_enqueue_style('my-css-1', get_template_directory_uri() . '/public/assets/css/reset.min.css', array(), '1.0.0', 'all');	
	wp_enqueue_style('my-css-2', get_template_directory_uri() . '/public/assets/css/common.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('my-css-3', get_template_directory_uri() . '/public/assets/css/loader.min.css', array(), '1.0.0', 'all');
	if( !is_home() || !is_front_page() ) {
		wp_enqueue_style('my-css-4', get_template_directory_uri() . '/public/assets/css/sub-page.min.css', array(), '1.0.0', 'all');
	}
	wp_enqueue_script('my-js-1', get_template_directory_uri() . '/public/assets/js/libs/text-animation.js', array(), '1.0.0', true);
	wp_enqueue_script('my-js-2', get_template_directory_uri() . '/public/assets/js/libs/hamburger-menu.js', array(), '1.0.0', true);
	wp_enqueue_script('my-js-3', get_template_directory_uri() . '/public/assets/js/libs/scroll-class-controller.js', array(), '1.0.0', true);
	wp_enqueue_script('my-js-4', get_template_directory_uri() . '/public/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// favicon設置
function set_myfavicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/public/assets/img/favicon.ico">' . "\n";
}
add_action('wp_head', 'set_myfavicon');

// 管理画面にfavicon設置
function admin_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/public/assets/img/favicon.ico">' . "\n";
}
add_action('admin_head', 'admin_favicon');


/**
* メニューの登録
*
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'mobile' => 'スマホメニュー',
)
);
}
add_action('init', 'my_menu_init');

// アーカイブページ
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'works'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 投稿名の変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = '制作実績';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
add_action( 'admin_menu', 'Change_menulabel' );

function Change_objectlabel() {
	global $wp_post_types;
	$name = '制作実績';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );

// 個別ページURL変更
function add_article_post_permalink( $permalink ) {
    $permalink = '/works' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
 
function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['works/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );

// セキュリティ対策
remove_action('wp_head', 'wp_generator');// WordPressのバージョン
remove_action('wp_head', 'wp_shortlink_wp_head');// 短縮URLのlink
remove_action('wp_head', 'wlwmanifest_link');// ブログエディターのマニフェストファイル
remove_action('wp_head', 'rsd_link');// 外部から編集するためのAPI
remove_action('wp_head', 'feed_links_extra', 3);// フィードへのリンク
remove_action('wp_head', 'print_emoji_detection_script', 7);// 絵文字に関するJavaScript
remove_action('wp_head', 'rel_canonical');// カノニカル
remove_action('wp_print_styles', 'print_emoji_styles');// 絵文字に関するCSS
remove_action('admin_print_scripts', 'print_emoji_detection_script');// 絵文字に関するJavaScript
remove_action('admin_print_styles', 'print_emoji_styles');// 絵文字に関するCSS

add_filter( 'show_admin_bar', '__return_false' );

/**
* フォーム自動入力機能
*/
function my_form_tag_filter($tag) {
	if (!is_array($tag)) {
		return $tag;
	}
  
	// ラジオボタンの場合
	if (isset($_GET['type'])) {
		if ($tag['name'] == 'radio-59') { // nameの値を指定
			// TODO: エラー処理を加えたほうがいい
			$tag['options'][] = 'default:' . $_GET['type'];
		}
	}

	return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 38);

// ページネーション
/* 
* $pages : 全ページ数
* $paged : 現在のページ
* $range : 左右に何ページ表示するか
*/
function pagenation( $pages = '', $range = 2 ) {

  // 現在のページ番号を取得
  global $paged;
  // ページ番号が空であれば1をセット
  if ( empty($paged) ) $paged = 1;

  if ( $pages == '' ) {
    // 全ページ数を取得
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    // 取得できなければ1をセット
    if ( !$pages ) {
      $pages = 1;
    }
  }

  // 2ページ以上ある場合に表示
  if( 1 != $pages ) {

    echo "<ul class=\"pagenation\">";

    // 前へ
    if ( $paged > 1 ) {
      echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></li>";
    }

    // ページ番号を表示
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        if ( $paged == $i ) {
          echo "<li class=\"current\">".$i."</li>";
        } else {
          echo "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
        }
      }
    }

    // 次へ
    if ( $paged < $pages ) { 
      echo "<li class=\"next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></li>";
    }

    echo "</ul>";
  }
}
?>