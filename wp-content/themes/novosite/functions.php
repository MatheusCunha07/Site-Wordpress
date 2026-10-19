<?php
/**
 * functions.php — o "cérebro" do tema.
 *
 * É carregado automaticamente pelo WordPress em toda requisição (painel e site),
 * antes de qualquer template. Aqui NÃO se gera HTML: só se registram recursos
 * e se "penduram" funções nos hooks do WordPress (add_action / add_filter).
 *
 * Para não virar um arquivo gigante, a lógica fica separada na pasta inc/.
 */

// Impede acesso direto ao arquivo pela URL.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOVOSITE_VERSION', '0.1.0' );

require get_template_directory() . '/inc/setup.php';   // recursos do tema e menus
require get_template_directory() . '/inc/enqueue.php'; // carregamento de CSS e JS
