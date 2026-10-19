<?php
/**
 * archive.php — listagens filtradas: categoria, tag, autor, data.
 *
 * Mesma lógica do index.php, mas com um título dizendo O QUE está sendo listado.
 */

get_header();
?>

<header class="archive-header">
	<?php the_archive_title( '<h1>', '</h1>' ); // ex.: "Categoria: Notícias" ?>
	<?php the_archive_description(); ?>
</header>

<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;

	the_posts_pagination();
	?>
<?php else : ?>
	<p><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'novosite' ); ?></p>
<?php endif; ?>

<?php
get_footer();
