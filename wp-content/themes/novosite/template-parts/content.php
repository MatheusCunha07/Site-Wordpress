<?php
/**
 * Resumo de um post dentro de listagens.
 *
 * Usado com get_template_part( 'template-parts/content' ) dentro do Loop,
 * por isso já tem acesso ao post atual (the_title, the_permalink...).
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
	<?php endif; ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="meta"><?php echo esc_html( get_the_date() ); ?></p>

	<?php the_excerpt(); ?>
</article>
