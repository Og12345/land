<?php
/**
 * @package sparkling
 */


get_header();

$home_fields = array(
	'titulo' 			=> 'titulo-diferenciais',
	'vantagens' 		=> 'vantagens-diferenciais',
	'titulo_itens' 		=> 'titulo_itens-diferenciais',
	'titulo_det_1' 		=> 'titulo_detalhe_1-diferenciais',
	'desc_det_1' 		=> 'descricao_detalhe_1-diferenciais',
	'imagem_det_1' 		=> 'imagem_detalhe_1-diferenciais',
	'titulo_det_2' 		=> 'titulo_detalhe_2-diferenciais',
	'desc_det_2' 		=> 'descricao_detalhe_2-diferenciais',
	'imagem_det_2' 		=> 'imagem_detalhe_2-diferenciais',
	'titulo_det_3' 		=> 'titulo_detalhe_3-diferenciais',
	'desc_det_3' 		=> 'descricao_detalhe_3-diferenciais',
	'imagem_det_3' 		=> 'imagem_detalhe_3-diferenciais',
	'titulo_det_4' 		=> 'titulo_detalhe_4-diferenciais',
	'desc_det_4' 		=> 'descricao_detalhe_4-diferenciais',
	'imagem_det_4' 		=> 'imagem_detalhe_4-diferenciais',
	'titulo_det_5' 		=> 'titulo_detalhe_5-diferenciais',
	'desc_det_5' 		=> 'descricao_detalhe_5-diferenciais',
	'imagem_det_5' 		=> 'imagem_detalhe_5-diferenciais',
	'titulo_det_6' 		=> 'titulo_detalhe_6-diferenciais',
	'desc_det_6' 		=> 'descricao_detalhe_6-diferenciais',
	'imagem_det_6' 		=> 'imagem_detalhe_6-diferenciais',
	'titulo_det_7' 		=> 'titulo_detalhe_7-diferenciais',
	'desc_det_7' 		=> 'descricao_detalhe_7-diferenciais',
	'imagem_det_7' 		=> 'imagem_detalhe_7-diferenciais',
	'titulo_det_8' 		=> 'titulo_detalhe_8-diferenciais',
	'desc_det_8' 		=> 'descricao_detalhe_8-diferenciais',
	'imagem_det_8' 		=> 'imagem_detalhe_8-diferenciais'
);

$titulo 		= get_field( $home_fields['titulo'] );
$vantagens 		= get_field( $home_fields['vantagens'] );
$titulo_itens 	= get_field( $home_fields['titulo_itens']);
$titulo_det_1 	= get_field( $home_fields['titulo_det_1']);
$desc_det_1 	= get_field( $home_fields['desc_det_1']);
$imagem_det_1 	= get_field( $home_fields['imagem_det_1']);
$titulo_det_2 	= get_field( $home_fields['titulo_det_2']);
$desc_det_2 	= get_field( $home_fields['desc_det_2']);
$imagem_det_2 	= get_field( $home_fields['imagem_det_2']);
$titulo_det_3 	= get_field( $home_fields['titulo_det_3']);
$desc_det_3 	= get_field( $home_fields['desc_det_3']);
$imagem_det_3 	= get_field( $home_fields['imagem_det_3']);
$titulo_det_4 	= get_field( $home_fields['titulo_det_4']);
$desc_det_4 	= get_field( $home_fields['desc_det_4']);
$imagem_det_4 	= get_field( $home_fields['imagem_det_4']);
$titulo_det_5 	= get_field( $home_fields['titulo_det_5']);
$desc_det_5 	= get_field( $home_fields['desc_det_5']);
$imagem_det_5 	= get_field( $home_fields['imagem_det_5']);
$titulo_det_6 	= get_field( $home_fields['titulo_det_6']);
$desc_det_6 	= get_field( $home_fields['desc_det_6']);
$imagem_det_6 	= get_field( $home_fields['imagem_det_6']);
$titulo_det_7 	= get_field( $home_fields['titulo_det_7']);
$desc_det_7 	= get_field( $home_fields['desc_det_7']);
$imagem_det_7 	= get_field( $home_fields['imagem_det_7']);
$titulo_det_8 	= get_field( $home_fields['titulo_det_8']);
$desc_det_8 	= get_field( $home_fields['desc_det_8']);
$imagem_det_8 	= get_field( $home_fields['imagem_det_8']);

custom_breadcrumbs();
?>

	<div class="nossos-diferenciais">
		<div id="post-<?php the_ID(); ?>" <?php post_class('vantagens'); ?>>
			<div class="conteudo">
				<h2><?php echo $titulo; ?></h2>

				<?php echo $vantagens; ?>
			</div>
		</div>
		<div id="post-<?php the_ID(); ?>" <?php post_class('itens'); ?>>
			<div class="wrapper">
				<div class="container-infos">
					<h2><?php echo $titulo_itens; ?></h2>

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
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_2['url']; ?>" alt="<?php echo $imagem_det_2['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_2; ?></strong>
							<p>
								<?php echo  $desc_det_2; ?>
							</p>
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
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_4['url']; ?>" alt="<?php echo $imagem_det_4['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_4; ?></strong>
							<p>
								<?php echo  $desc_det_4; ?>
							</p>
						</div>
					</div>
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_5['url']; ?>" alt="<?php echo $imagem_det_5['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_5; ?></strong>
							<p>
								<?php echo  $desc_det_5; ?>
							</p>
						</div>
					</div>
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_6['url']; ?>" alt="<?php echo $imagem_det_6['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_6; ?></strong>
							<p>
								<?php echo  $desc_det_6; ?>
							</p>
						</div>
					</div>
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_7['url']; ?>" alt="<?php echo $imagem_det_7['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_7; ?></strong>
							<p>
								<?php echo  $desc_det_7; ?>
							</p>
						</div>
					</div>
					<div>
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_8['url']; ?>" alt="<?php echo $imagem_det_8['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_8; ?></strong>
							<p>
								<?php echo  $desc_det_8; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<?php
			include 'modulo-pesquisa.php';
		?>
	</div>

	<?php 
		get_sidebar();

		get_footer();
	?>
