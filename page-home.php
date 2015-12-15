<?php
/**
 * @package sparkling
 */


get_header();

$home_fields = array(
	'titulo' 			=> 'titulo-home',
	'subtitulo'			=> 'sub_titulo-home',
	'descricao'			=> 'descricao-home',
	'logo-cruzeiro'		=> 'logo_cruzeiro_do_sul-home',
	'logo-unicid'		=> 'logo_unicid-home',
	'logo-unifran'		=> 'logo_unifran-home',
	'cta'				=> 'link_cta-home',
	'saiba-mais'		=> 'link_saiba_mais-home',
	'scroll-form'		=> 'link_scroll_form-home',
	'titulo-detalhes'	=> 'titulo_detalhes-home',
	'imagem_det_1' 		=> 'imagem_detalhe_1-home',
	'titulo_det_1' 		=> 'titulo_detalhe_1-home',
	'desc_det_1' 		=> 'descricao_detalhe_1-home',
	'imagem_det_2' 		=> 'imagem_detalhe_2-home',
	'titulo_det_2' 		=> 'titulo_detalhe_2-home',
	'desc_det_2' 		=> 'descricao_detalhe_2-home',
	'imagem_det_3' 		=> 'imagem_detalhe_3-home',
	'titulo_det_3' 		=> 'titulo_detalhe_3-home',
	'desc_det_3' 		=> 'descricao_detalhe_3-home',
	'titulo_video'		=> 'titulo_video-home',
	'video'				=> 'video-home'
);

$titulo 		= get_field( $home_fields['titulo'] );
$subtitulo		= get_field( $home_fields['subtitulo'] );
$descricao		= get_field( $home_fields['descricao'] );
$logo_cruzeiro 	= get_field( $home_fields['logo-cruzeiro'] );
$logo_unicid 	= get_field( $home_fields['logo-unicid'] );
$logo_unifran 	= get_field( $home_fields['logo-unifran'] );
$link_cta 		= get_field( $home_fields['cta'] );
$saiba_mais 	= get_field( $home_fields['saiba-mais'] );
$scroll_form 	= get_field( $home_fields['scroll-form'] );
$titulo_detalhes= get_field( $home_fields['titulo-detalhes'] );
$imagem_det_1 	= get_field( $home_fields['imagem_det_1']);
$titulo_det_1 	= get_field( $home_fields['titulo_det_1']);
$desc_det_1 	= get_field( $home_fields['desc_det_1']);

$imagem_det_2 	= get_field( $home_fields['imagem_det_2']);
$titulo_det_2 	= get_field( $home_fields['titulo_det_2']);
$desc_det_2 	= get_field( $home_fields['desc_det_2']);

$imagem_det_3 	= get_field( $home_fields['imagem_det_3']);
$titulo_det_3 	= get_field( $home_fields['titulo_det_3']);
$desc_det_3 	= get_field( $home_fields['desc_det_3']);

$titulo_video 	= get_field( $home_fields['titulo_video']);
$video 			= get_field( $home_fields['video']);
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class('banner-home'); ?>>
		<div class="wrapper">
			<div class="info-banner">
				<h2><?php echo $titulo; ?></h2>
				<h1><?php echo $subtitulo; ?></h1>
				<p  class="p-text"><?php //echo $descricao; ?> A qualidade de ensino de 3 instituições no oferecimento<br />
de mais de 60 cursos entre de graduação, pós-graduação e<br /> cursos livres, na modalidade a distância, em mais de 100 polos <span class="ut-l" >credenciados.</span>                
                </p>
			</div>
			<!--<div class="area-logos">
				<div class="logo-img">
					<img src="<?php echo $logo_cruzeiro['url']; ?>" alt="<?php echo $logo_cruzeiro['alt']; ?>" />
				</div>
				<div class="logo-img">
					<img src="<?php echo $logo_unicid['url']; ?>" alt="<?php echo $logo_unicid['alt']; ?>" />
				</div>
				<div class="logo-img">
					<img src="<?php echo $logo_unifran['url']; ?>" alt="<?php echo $logo_unifran['alt']; ?>" />
				</div>
			</div> -->
			<div class="area-links">
				<div>
					<a href="category/cursos" title="<?php echo $link_cta; ?>" class="cta-banner link"><?php echo $link_cta; ?></a>
				</div>
				<div>
					<a href="#itens" title="<?php echo $saiba_mais; ?>" class="link more scroll"><?php echo $saiba_mais; ?></a>
				</div>
			</div>
		</div>
	</div>
	<div id="itens" <?php post_class('itens detalhes-home'); ?>>
		<div class="wrapper">
			<div class="container-infos">
				<h2><?php echo $titulo_detalhes; ?></h2>

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
			</div>

			<div>
				<a href="#secondary" title="<?php echo $scroll_form; ?>" class="link cta-form scroll"><?php echo $scroll_form; ?></a>
			</div>
		</div>
	</div>
	<div id="post-<?php the_ID(); ?>" <?php post_class('video-home'); ?>>
		<div class="wrapper">
			<div class="container-video">
				<h2><?php echo $titulo_video; ?></h2>

				<div class="video">
					<?php echo $video; ?>
				</div>
			</div>

			<div>
				<a href="#secondary" title="<?php echo $scroll_form; ?>" class="link cta-form scroll"><?php echo $scroll_form; ?></a>
			</div>
		</div>
	</div>
	<?php
		include 'modulo-pesquisa.php';
	?>

	<?php 
		get_sidebar();

		get_footer();
	?>
