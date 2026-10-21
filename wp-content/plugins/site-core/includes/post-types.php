<?php
/**
 * Custom Post Types do site.
 */

if ( ! defined( 'ABSPATH' ) ) {
      exit;
}

function site_core_register_post_types() {
      register_post_type(
              'projeto', // nome interno: minúsculo, singular, até 20 caracteres
              array(
                      // Textos que aparecem no painel
                      'labels'        => array(
                              'name'          => __( 'Projetos', 'site-core' ),
                              'singular_name' => __( 'Projeto', 'site-core' ),
                              'all_items'     => __( 'Todos os projetos', 'site-core' ),
                              'add_new_item'  => __( 'Adicionar novo projeto', 'site-core' ),
                              'edit_item'     => __( 'Editar projeto', 'site-core' ),
                              'view_item'     => __( 'Ver projeto', 'site-core' ),
                              'search_items'  => __( 'Buscar projetos', 'site-core' ),
                              'not_found'     => __( 'Nenhum projeto encontrado', 'site-core' ),
                      ),
                      'public'        => true,                 // aparece no site e no painel
                      'has_archive'   => 'projetos',           // cria a listagem em /projetos/
                      'rewrite'       => array( 'slug' => 'projetos' ), // URL de cada item: /projetos/nome-do-projeto
                      'menu_position' => 5,                    // logo abaixo de "Posts" no menu do painel
                      'menu_icon'     => 'dashicons-portfolio', // ícone (lista em developer.wordpress.org/resource/da
                      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ), // campos do editor
                      'show_in_rest'  => true,                 // necessário para usar o editor de blocos
              )
      );
}
        
add_action( 'init', 'site_core_register_post_types' );