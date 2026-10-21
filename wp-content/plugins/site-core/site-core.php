<?php
/**
 * Plugin Name:  Site Core
 * Description:  Funcionalidades do site (tipos de conteúdo e taxonomias). Independe do tema.
 * Version:      0.1.0
 * Author:       Matheus
 * Requires PHP: 8.1
 * Text Domain:  site-core
 */

/*
 * Assim como o style.css do tema, este cabeçalho é o que faz o WordPress
 * reconhecer o arquivo como plugin (aparece em Plugins → Plugins instalados).
 */

if ( ! defined( 'ABSPATH' ) ) {
      exit;
}

define( 'SITE_CORE_PATH', plugin_dir_path( __FILE__ ) );

require SITE_CORE_PATH . 'includes/post-types.php';
require SITE_CORE_PATH . 'includes/taxonomies.php';

/**
 * Ao ATIVAR o plugin: registra o CPT e a taxonomia e recria as regras de URL.
 * Sem isso, /projetos/ daria 404 até alguém salvar os Links permanentes.
 */
function site_core_activate() {
      site_core_register_post_types();
      site_core_register_taxonomies();
      flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'site_core_activate' );

// Ao DESATIVAR: limpa as URLs do CPT.
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );

