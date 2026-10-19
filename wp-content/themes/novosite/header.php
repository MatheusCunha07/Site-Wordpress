<?php
/**
 * header.php — início de TODA página.
 *
 * Chamado nos templates com get_header().
 * Abre o HTML, o <head> e o cabeçalho visual do site (logo + menu).
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); // OBRIGATÓRIO: aqui entram CSS, <title>, SEO e scripts de plugins ?>
</head>

<body <?php body_class(); // adiciona classes úteis: home, single, page-id-5... ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>

		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Menu principal', 'novosite' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'principal',
					'container'      => false,
					'fallback_cb'    => false, // não mostra nada se o menu ainda não foi criado
				)
			);
			?>
		</nav>
	</div>
</header>

<main class="site-main container">
