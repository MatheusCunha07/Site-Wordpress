<?php
/**
 * single.php — exibe UM post completo (ex.: /ola-mundo/).
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<p class="meta"><?php echo esc_html( get_the_date() ); ?> · <?php the_author(); ?></p>

		<?php the_post_thumbnail( 'large' ); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>

	<?php
	the_post_navigation(); // link para o post anterior / próximo

	if ( comments_open() || get_comments_number() ) {
		comments_template(); // usa o modelo padrão de comentários do WordPress
	}
endwhile;

get_footer();
