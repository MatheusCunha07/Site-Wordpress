<?php
/**
 * page.php — exibe uma PÁGINA (Sobre, Contato...).
 *
 * Diferente do single.php: páginas não têm data, autor nem navegação anterior/próximo.
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
	<?php
endwhile;

get_footer();
