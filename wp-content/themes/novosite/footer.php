<?php
/**
 * footer.php — final de TODA página.
 *
 * Chamado nos templates com get_footer().
 * Fecha o <main> aberto no header.php, mostra o rodapé e fecha o HTML.
 */
?>
</main>

<footer class="site-footer">
	<div class="container">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'rodape',
				'container'      => false,
				'fallback_cb'    => false,
			)
		);
		?>
		<p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>

<?php wp_footer(); // OBRIGATÓRIO: scripts do tema/plugins e a barra de admin ?>
</body>
</html>
