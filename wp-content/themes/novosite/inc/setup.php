<?php
/**
 * Configuração básica do tema.
 *
 * O hook 'after_setup_theme' roda logo depois que o tema é carregado —
 * é o lugar certo para declarar o que o tema suporta.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function novosite_setup() {
	// Deixa o WordPress gerar a tag <title> automaticamente.
	add_theme_support( 'title-tag' );

	// Habilita "Imagem destacada" em posts e páginas.
	add_theme_support( 'post-thumbnails' );

	// Logo personalizado em Aparência → Personalizar.
	add_theme_support( 'custom-logo' );

	// Marcação HTML5 moderna nos formulários, galerias etc.
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	// Locais de menu que aparecem em Aparência → Menus.
	register_nav_menus(
		array(
			'principal' => __( 'Menu principal', 'novosite' ),
			'rodape'    => __( 'Menu do rodapé', 'novosite' ),
		)
	);
}
add_action( 'after_setup_theme', 'novosite_setup' );
