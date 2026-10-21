<?php
/**
 * Taxonomias do site (as "categorias" dos CPTs).
 */

if ( ! defined( 'ABSPATH' ) ) {
      exit;
}

function site_core_register_taxonomies() {
      register_taxonomy(
              'tipo_projeto',   // nome interno
              array( 'projeto' ), // a qual(is) tipo(s) de conteúdo ela pertence
              array(
                      'labels'            => array(
                              'name'          => __( 'Tipos de projeto', 'site-core' ),
                              'singular_name' => __( 'Tipo de projeto', 'site-core' ),
                              'add_new_item'  => __( 'Adicionar novo tipo', 'site-core' ),
                              'edit_item'     => __( 'Editar tipo', 'site-core' ),
                              'all_items'     => __( 'Todos os tipos', 'site-core' ),
                      ),
                      'hierarchical'      => true,  // true = funciona como Categorias (com pai/filho); false = como T
                      'show_admin_column' => true,  // mostra a coluna "Tipo" na lista de projetos do painel
                      'show_in_rest'      => true,  // aparece no editor de blocos
                      'rewrite'           => array( 'slug' => 'tipo-projeto' ), // URL: /tipo-projeto/site/
              )
      );
}
add_action( 'init', 'site_core_register_taxonomies' );