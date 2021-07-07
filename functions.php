<?php

 	//*****************************************************************
	//  テーマサポート
	//*****************************************************************
	add_theme_support('post-thumbnails'); //アイキャッチ画像

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
	//  ページ作成
	//*****************************************************************
	// アーカイブ
	function post_has_archive( $args, $post_type) {
		if ('post' == $post_type) {
			$args['rewrite'] = true;
			$args['has_archive'] = 'archive'; //任意のスラッグ名
		}
		return $args;
	}
	add_filter('register_post_type_args', 'post_has_archive', 10, 2);

	//*****************************************************************
	//  その他
	//*****************************************************************

?>