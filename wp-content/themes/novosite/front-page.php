<?php
/**
 * front-page.php — página inicial personalizada.
 *
 * Tem prioridade sobre home.php e index.php na raiz do site.
 * Aqui não usamos o Loop "automático": fazemos nossa própria consulta com WP_Query.
 */

get_header();
?>

<section class="hero">
      <h1><?php bloginfo( 'name' ); ?></h1>
      <p><?php bloginfo( 'description' ); // o "Descrição" de Configurações → Geral ?></p>
</section>

<section class="ultimos-posts">
      <h2><?php esc_html_e( 'Últimos posts', 'novosite' ); ?></h2>

      <?php
      // Consulta própria: busca os 3 posts mais recentes.
      $ultimos = new WP_Query(
              array(
                      'post_type'           => 'post',
                      'posts_per_page'      => 3,
                      'ignore_sticky_posts' => true,
              )
      );

      if ( $ultimos->have_posts() ) :
              ?>
              <div class="grid">
                      <?php
                      while ( $ultimos->have_posts() ) :
                              $ultimos->the_post();
                              get_template_part( 'template-parts/content' ); // reaproveita o mesmo card da listagem
                      endwhile;
                      ?>
              </div>
              <?php
              wp_reset_postdata(); // IMPORTANTE: devolve o WordPress ao post "original" da página
      endif;

      // Link para a página de posts (configurada em Configurações → Leitura).
      $pagina_blog = get_option( 'page_for_posts' );
      if ( $pagina_blog ) :
              ?>
              <p><a class="botao" href="<?php echo esc_url( get_permalink( $pagina_blog ) ); ?>"><?php esc_html_e( 'Veposts', 'novosite' ); ?></a></p>
      <?php endif; ?>
</section>

<?php
get_footer();