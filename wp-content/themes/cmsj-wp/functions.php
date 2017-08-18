<?php 
add_theme_support('post-thumbnails');

function post_imovel() {
	$labels = array(
		'name' => 'Noiticias',
		'name_singular' => 'Noticias',
		'add_new' => 'Adicionar Noticia',
		'add_new_item' => 'Adicionar  Noticia',
		'edit_item' => 'Editar Noticia'
		);
	$args = array(
		'public' => true,
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site',
		 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' , 'page-attributes','custom-fields','post-format')
		);

	register_post_type('imovel', $args);


}

add_action( 'init', 'post_imovel');