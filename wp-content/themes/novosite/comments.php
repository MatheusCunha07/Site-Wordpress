<?php
/**
 * comments.php — lista de comentários + formulário.
 *
 * Carregado pelo comments_template() do single.php.
 */

// Post protegido por senha: não mostra comentários até a senha ser digitada.
if ( post_password_required() ) {
      return;
}
?>

<section id="comments" class="comments">

      <?php if ( have_comments() ) : ?>
              <h2>
                      <?php
                      printf(
                              /* translators: %s: número de comentários */
                              esc_html( _n( '%s comentário', '%s comentários', get_comments_number(), 'novosite' ) ),
                              esc_html( number_format_i18n( get_comments_number() ) )
                      );
                      ?>
              </h2>

              <ol class="comment-list">
                      <?php
                      wp_list_comments(
                              array(
                                      'style'       => 'ol',
                                      'avatar_size' => 48,
                                      'short_ping'  => true,
                              )
                      );
                      ?>
              </ol>

              <?php the_comments_navigation(); ?>
      <?php endif; ?>

      <?php comment_form(); // formulário padrão do WordPress ?>

</section>