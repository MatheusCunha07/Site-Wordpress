<?php
/**
 * index.php — template OBRIGATÓRIO e último recurso da hierarquia.
 *
 * Se o WordPress não encontrar um template mais específico (single.php, page.php,
 * archive.php...), ele usa este. Aqui ele lista posts (blog, buscas, arquivos).
 *
 * O "Loop" abaixo percorre os posts que o WordPress já buscou para esta URL.
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

	<?php
	while ( have_posts() ) :
		the_post(); // prepara o post atual para the_title(), the_content() etc.

		// Reaproveita o bloco de HTML de template-parts/content.php
		get_template_part( 'template-parts/content' );
	endwhile;

	the_posts_pagination(); // links "anterior / próxima" página
	?>

<?php else : ?>

	<p><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'novosite' ); ?></p>

<?php endif; ?>

<?php
get_footer();
