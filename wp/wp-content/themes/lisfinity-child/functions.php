<?php
add_action( 'wp_enqueue_scripts', 'lchild_enqueue_styles', 3 );
function lchild_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}