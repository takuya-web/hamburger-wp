<?php

	//*****************************************************************
	//  CSS,JavaScriptの呼び出し
	//*****************************************************************
	function hamburger_script() {
		wp_enqueue_style('hamburger-css', get_template_directory_uri().'/scss/style.css', array(), '1.0.0');
		wp_enqueue_style('hamburger-style', get_template_directory_uri().'/style.css', array(), '1.0.0');
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js' , array(), "3.6.0", true );
		wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js' , array(), "1.12.1", true );
		wp_enqueue_script( 'scriptjs', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true );
	}
	add_action('wp_enqueue_scripts','hamburger_script');

	//*****************************************************************
	//  CSS,JavaScriptの呼び出し
	//*****************************************************************
	// 管理バーの項目の非表示
	function remove_admin_bar_menus( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'wp-logo' );    // WordPressマーク
		$wp_admin_bar->remove_node( 'comments' );   // コメント
		$wp_admin_bar->remove_menu( 'customize' );
		$wp_admin_bar->remove_node( 'new-post' );   //新規固定ページ
	}
	add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );


?>