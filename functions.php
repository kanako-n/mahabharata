<?php
//スクリプト一元管理
function my_enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'script_js', get_template_directory_uri(). '/assets/js/script.js', array() );
	wp_enqueue_style( 'font_style', 'https://use.typekit.net/lmu4bej.css', array(), '1.0.0' );
	wp_enqueue_style( 'my_styles', get_template_directory_uri(). '/assets/css/style.min.css', array() );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

//<title>タグを出力する
add_theme_support( 'title-tag' );

//タイトルの区切り文字変更
add_filter( 'document_title_separator', 'my_document_title_separator' );
function my_document_title_separator($separator) {
	$separator = '|';
	return $separator;
}	

//カスタムメニュー機能を使用可能にする
register_nav_menu('place_header', 'ヘッダーナビ');

