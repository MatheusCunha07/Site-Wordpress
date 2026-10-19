<?php
/**
 * 404.php — página não encontrada.
 */

get_header();
?>

<section class="error-404">
	<h1><?php esc_html_e( 'Página não encontrada', 'novosite' ); ?></h1>
	<p><?php esc_html_e( 'O endereço acessado não existe. Tente uma busca:', 'novosite' ); ?></p>
	<?php get_search_form(); ?>
</section>

<?php
get_footer();
