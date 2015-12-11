<?php
/**
 * @package sparkling
 */


get_header();

$curso_fields = array(
	'imagem_curso'			=> 'imagem_curso',
	'nome_curso'			=> 'nome_curso',
	'investimento_curso'	=> 'investimento_curso',
	'modalidade_curso'		=> 'modalidade_curso',
	'duracao_curso'			=> 'duracao_curso',
	'descricao_curso'		=> 'descricao_curso'
	'descricao_curso'		=> 'descricao_curso'
);

$imagem_curso 			= get_field( $curso_fields['imagem_curso'] );
$nome_curso 			= get_field( $curso_fields['nome_curso'] );
$investimento_curso 	= get_field( $curso_fields['investimento_curso'] );
$modalidade_curso 		= get_field( $curso_fields['modalidade_curso'] );
$duracao_curso 			= get_field( $curso_fields['duracao_curso'] );
$descricao_curso 			= get_field( $curso_fields['descricao_curso'] );

?>
	<div class="curso">
		<article id="post-<?php the_ID(); ?>" <?php post_class('descricao-curso'); ?>>
			<div class="descricao">
				<div class="imagem">
					<img src="<?php echo $imagem_curso['url']; ?>" alt="<?php echo $imagem_curso['alt']; ?>" />
				</div>
				<div class="texto">
					<h2><?php echo $nome_curso; ?></h2>

					<p class="infos">
						INVESTIMENTO: R$<?php echo $investimento_curso; ?> por mês <br>
						MODALIDADE: <?php echo $modalidade_curso; ?> <br>
						DURAÇÃO: <?php echo $duracao_curso; ?> <br>
					</p>

					<p><?php echo $descricao_curso; ?></p>
				</div>
			</div>
		</article>
		<article id="post-<?php the_ID(); ?>" <?php post_class('detalhes-curso'); ?>>
			<div class="detalhes">
				<div class="container-infos">
					<div>
						<h2><?php echo $titulo_detalhes; ?></h2>
					</div>
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_1['url']; ?>" alt="<?php echo $imagem_det_1['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_1; ?></strong>
							<p>
								<?php echo  $desc_det_1; ?>
							</p>
						</div>
					</div>
					<div class="right">
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_2; ?></strong>
							<p>
								<?php echo  $desc_det_2; ?>
							</p>
						</div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_2['url']; ?>" alt="<?php echo $imagem_det_2['alt']; ?>" />
						</div>
					</div>
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_3['url']; ?>" alt="<?php echo $imagem_det_3['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_3; ?></strong>
							<p>
								<?php echo  $desc_det_3; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article id="post-<?php the_ID(); ?>" <?php post_class('video-curso'); ?>>
			<div class="detalhes">
				<div class="container-video">
					<div>
						<h2><?php echo $titulo_video; ?></h2>
					</div>
					<div class="video">
						<?php echo $video; ?>
					</div>
				</div>
			</div>
		</article>
	</div>

	<?php 
		get_sidebar();

		get_footer();
	?>
