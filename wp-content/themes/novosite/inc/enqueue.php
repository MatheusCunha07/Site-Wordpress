<?php
/**
 * Carregamento de CSS e JS.
 *
 * Nunca coloque <link> ou <script> direto no header.php: use wp_enqueue_*.
 * Assim o WordPress controla a ordem, evita duplicidade e plugins conseguem interagir.
 * As tags geradas aqui são impressas por wp_head() (header.php) e wp_footer() (footer.php).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function novosite_assets() {
	wp_enqueue_style(
		'novosite-main',                                     // identificador único
		get_template_directory_uri() . '/assets/css/main.css',
		array(),                                             // dependências
		NOVOSITE_VERSION                                     // versão (evita cache antigo)
	);

	wp_enqueue_script(
		'novosite-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		NOVOSITE_VERSION,
		array( 'in_footer' => true, 'strategy' => 'defer' )
	);
}
add_action( 'wp_enqueue_scripts', 'novosite_assets' );
