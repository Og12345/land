<?php
/**
 * @package sparkling
 */
?>

<?php
	$home_fields = array(
		'titulo' 			=> 'titulo-home',
		'subtitulo'			=> 'sub_titulo-home',
		'descricao'			=> 'descricao-home',
		'logo-cruzeiro'		=> 'logo_cruzeiro_do_sul-home',
		'logo-unicid'		=> 'logo_unicid-home',
		'logo-unifran'		=> 'logo_unifran-home',
		'cta'				=> 'link_cta-home',
		'saiba-mais'		=> 'link_saiba_mais-home',
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
	<article id="post-<?php the_ID(); ?>" <?php post_class('banner-home'); ?>>
		<div class="banner-conteudo">
			<div class="info-banner">
				<h2><?php echo $titulo; ?></h2>
				<h1><?php echo $subtitulo; ?></h1>
				<p><?php echo $descricao; ?></p>
			</div>
			<div class="area-logos">
				<div class="logo-img">
					<img src="<?php echo $logo_cruzeiro['url']; ?>" alt="<?php echo $logo_cruzeiro['alt']; ?>" />
				</div>
				<div class="logo-img">
					<img src="<?php echo $logo_unicid['url']; ?>" alt="<?php echo $logo_unicid['alt']; ?>" />
				</div>
				<div class="logo-img">
					<img src="<?php echo $logo_unifran['url']; ?>" alt="<?php echo $logo_unifran['alt']; ?>" />
				</div>
			</div>
			<div class="area-links">
				<div>
					<a href="#" title="<?php echo $link_cta; ?>" class="cta-banner link"><?php echo $link_cta; ?></a>
				</div>
				<div>
					<a href="#" title="<?php echo $saiba_mais; ?>" class="link more"><?php echo $saiba_mais; ?></a>
				</div>
			</div>
		</div>
	</article>
	<article id="post-<?php the_ID(); ?>" <?php post_class('detalhes-home'); ?>>
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
	<article id="post-<?php the_ID(); ?>" <?php post_class('video-home'); ?>>
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
