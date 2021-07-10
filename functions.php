<?php
 	//*****************************************************************
	//  テーマサポート
	//*****************************************************************
	add_theme_support('post-thumbnails'); //アイキャッチ画像
	add_theme_support( 'automatic-feed-links' ); //テーマはフィードリンクをサポートするため必要
	add_theme_support( 'menus' ); //テーマメニュー
	add_theme_support( 'title-tag' ); //タイトル出力

	//*****************************************************************
	//  Prefetch
	//*****************************************************************
	function gg_gfonts_prefetch() {
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
		echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>';
	}
	add_action('wp_head', 'gg_gfonts_prefetch');

	//*****************************************************************
	//  フォント・CSS・JavaScriptの呼び出し
	//*****************************************************************
	function hamburger_script() {
		wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array(), '');
		wp_enqueue_style('M+PLUS+1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap', array(), '');
		wp_enqueue_style('hamburger-css', get_template_directory_uri().'/scss/style.css', array(), '1.0.0');
		wp_enqueue_style('hamburger-style', get_template_directory_uri().'/style.css', array(), '1.0.0');
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js' , array(), "3.6.0", true );
		wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js' , array(), "1.12.1", true );
		wp_enqueue_script( 'scriptjs', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true );
	}
	add_action('wp_enqueue_scripts','hamburger_script');

	//*****************************************************************
	//  アドミンバー設定
	//*****************************************************************
	// 管理バーの項目の非表示
	function remove_admin_bar_menus( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'wp-logo' );    // WordPressマーク
		$wp_admin_bar->remove_node( 'comments' );   // コメント
		$wp_admin_bar->remove_menu( 'customize' );
		$wp_admin_bar->remove_node( 'new-post' );   //新規固定ページ
	}
	add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );

	//*****************************************************************
	//  タイトル出力
	//*****************************************************************
	function hamberger_title( $title ) {
		if ( is_front_page() && is_home() ) { //トップページなら
				$title = get_bloginfo( 'name', 'display' );
		} elseif ( is_archive() ) { //アーカイブページなら
				$title = get_bloginfo( 'name', 'display' );
		} elseif ( is_search() ) { //サーチページなら
				$title = get_bloginfo( 'name', 'display' );
		}
				return $title;
		}
  add_filter( 'pre_get_document_title', 'hamberger_title' );

	//*****************************************************************
	//  ページ作成
	//*****************************************************************
	// archive
	function post_has_archive( $args, $post_type ) {
		if ( 'post' == $post_type ) {
			$args[ 'rewrite' ] = true;
			$args[ 'has_archive' ] = 'menu'; //任意のスラッグ名
		}
		return $args;
	}
	add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

	//*****************************************************************
	//  カスタム投稿タイプの追加
	//*****************************************************************
	// add_action( 'init', 'custom_post_type' );
	// function custom_post_type() {
	// 	/*【カスタム投稿タイプの追加】 */
	// 	register_post_type( 'menu', // 投稿タイプのスラッグの指定
	// 		array(
	// 			'labels' => array(
	// 				'name' => __( 'メニュー' ), // メニューに表示されるラベル
	// 				'singular_name' => __( 'メニュー' ), // 単体系のラベル
	// 				'add_new' => _x('新しく登録する', 'メニュー'), // 新規追加のラベル、国際化対応のために投稿タイプを指定
	// 				'add_new_item' => __('登録する') // 新規項目追加のラベル
	// 			),
	// 			'description' => 'ディスクリプション', // ディスクリプションを指定
	// 			'public' => true, // 投稿タイプをパブリックにする
	// 			'has_archive' => true, // アーカイブを有効にする
	// 			'show_in_rest' => true, //Gutenberg有効化
	// 			'hierarchical' => false, // ページ階層の指定
	// 			'menu_position' =>5, // 管理画面上の配置指定
	// 			'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes') // サポートの指定
	// 		)
	// 	);
	// }

	//*****************************************************************
	//  ウィジェット
	//*****************************************************************
	function hamberger_widgets_init() {
		register_sidebar(
			array(
				'name'          => 'アーカイブウィジェット',
				'id'            => 'archive_widget',
				'description'   => 'アーカイブ用ウィジェットです',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
				'after_title'   => "</h2>\n",
			)
		);
	}
	add_action('widgets_init', 'hamberger_widgets_init');

	//*****************************************************************
	//  検索結果から固定ページを除外
	//*****************************************************************
	function my_search_filter($search) {
		if(is_search()) {
			$search .= "AND post_type = 'post'";
		}
		return $search;
	}
	add_filter('posts_search', 'my_search_filter');

	//*****************************************************************
	//  remove_filter
	//*****************************************************************
	//カテゴリー説明文でHTMLタグを使う
	remove_filter( 'pre_term_description', 'wp_filter_kses' );

  //*****************************************************************
	//  メニュー出力設定
	//*****************************************************************


?>