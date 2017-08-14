<?php 
add_theme_support('post-thumbnails');

function post_imovel() {
	$labels = array(
		'name' => 'Imóveis',
		'name_singular' => 'Imóvel'
		);
	$args = array(
		'public' => true,
		'labels' => $labels
		);
	register_post_type('imovel', $args);
}

add_action( 'init', 'post_imovel');