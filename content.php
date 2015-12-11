<?php
/**
 * @package sparkling
 */

if (in_category('Cursos EAD Cruzeiro do Sul')) :

	$getcurso_fields = array(
		'nome_curso'			=> 'nome_curso',
		'imagem_curso'			=> 'imagem_curso'
	);

	$nome_curso 			= get_field( $getcurso_fields['nome_curso'] );
	$imagem_curso 			= get_field( $getcurso_fields['imagem_curso'] );
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('article-single'); ?>>
		<div class="blog-item-wrap">
			<div class="img-wrap">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
			<div class="name-wrap">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php echo $nome_curso; ?>
				</a>				
			</div>
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<p><a class="btn btn-default read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'sparkling' ); ?></a></p>
			</div><!-- .entry-summary -->
			<?php endif; ?>
		</div>
	</article><!-- #post-## -->
<?php elseif (in_category('Polos')) :
	$getcurso_fields = array(
		'imagem_polo'		=> 'imagem_polo',
		'nome_polo'			=> 'nome_polo'
	);

	$imagem_polo 		= get_field( $getcurso_fields['imagem_polo'] );
	$nome_polo 			= get_field( $getcurso_fields['nome_polo'] );
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('article-single'); ?>>
		<div class="blog-item-wrap">
			<div class="img-wrap">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<img src="<?php echo $imagem_polo['url']; ?>" alt="<?php echo $imagem_polo['alt']; ?>" />
				</a>
			</div>
			<div class="name-wrap">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php echo $nome_polo; ?>
				</a>				
			</div>
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<p><a class="btn btn-default read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'sparkling' ); ?></a></p>
			</div><!-- .entry-summary -->
			<?php endif; ?>
		</div>
	</article><!-- #post-## -->
<?php else : ?>
	<p>Categoria não encontrada</p>
<?php endif; ?>
