<?php
/**
 * @package sparkling
 */


get_header();

$polo_fields = array(
	'imagem_polo'			=> 'imagem_polo',
	'nome_polo'				=> 'nome_polo',
	'logo-diploma'			=> 'logo_diploma-polo',
	'texto_logos' 			=> 'texto_logos-polo',
	'titulo_info_1' 		=> 'titulo_info_1',
	'titulo_info_2' 		=> 'titulo_info_2',
	'titulo_info_3' 		=> 'titulo_info_3',
	'conteudo_info_1' 		=> 'conteudo_info_1',
	'conteudo_info_2' 		=> 'conteudo_info_2',
	'conteudo_info_3' 		=> 'conteudo_info_3',
	'endereco_polo' 		=> 'endereco_polo',
	'telefone_polo' 		=> 'telefone_polo'
);

$imagem_polo 			= get_field( $polo_fields['imagem_polo'] );
$nome_polo 				= get_field( $polo_fields['nome_polo'] );
$logo_diploma 			= '';
$texto_logos 			= get_field( $polo_fields['texto_logos'] );
$titulo_info_1 			= get_field( $polo_fields['titulo_info_1'] );
$titulo_info_2 			= get_field( $polo_fields['titulo_info_2'] );
$titulo_info_3 			= get_field( $polo_fields['titulo_info_3'] );
$conteudo_info_1 		= get_field( $polo_fields['conteudo_info_1'] );
$conteudo_info_2 		= get_field( $polo_fields['conteudo_info_2'] );
$conteudo_info_3 		= get_field( $polo_fields['conteudo_info_3'] );
$endereco_polo	 		= get_field( $polo_fields['endereco_polo'] );
$telefone_polo	 		= get_field( $polo_fields['telefone_polo'] );

echo $imagem_polo['url'];

custom_breadcrumbs();
?>
	<div class="polo">
		<article <?php post_class('descricao-polo'); ?>>
			<div class="grid-polo">
				<div class="descricao grid-md">
					<div class="imagem">
						<img src="<?php echo $imagem_polo['url']; ?>" alt="<?php echo $imagem_polo['alt']; ?>" />
					</div>
					<div class="texto">
						<h2><?php echo $nome_polo; ?></h2>
						<p><?php echo $descricao_polo; ?></p>
					</div>
				</div>
			</div>
		</article>
		<article <?php post_class('sobre-polo'); ?>>
			<div class="grid-polo">
				<div class="grid-md">
					<?php //the_content(); ?>
					<div class="panel-group" id="custom-collapse-0"> 
						<?php if ($titulo_info_1 !== '') {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#custom-collapse-0" href="#item1" aria-expanded="false">
											<?php echo $titulo_info_1; ?>
										</a>
									</h4>
								</div>
								<div id="item1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p><?php echo $conteudo_info_1; ?></p>
									</div>
								</div>
							</div>
						<?php }
						if ($titulo_info_2 !== '') {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#custom-collapse-0" href="#item2" aria-expanded="false">
											<?php echo $titulo_info_2; ?>
										</a>
									</h4>
								</div>
								<div id="item2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p><?php echo $conteudo_info_2; ?></p>
									</div>
								</div>
							</div>  
						<?php }
						if ($titulo_info_3 !== '') {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#custom-collapse-0" href="#item4" aria-expanded="false">
											<?php echo $titulo_info_3; ?>
										</a>
									</h4>
								</div>
								<div id="item4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<div>
											<p><?php echo $endereco_polo; ?></p>
											<p><?php echo $telefone_polo; ?></p>
										</div>
										<div class="acf-map">
											<div class="marker" data-lat="<?php echo $conteudo_info_3['lat']; ?>" data-lng="<?php echo $conteudo_info_3['lng']; ?>"></div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</article>

		<?php
			include 'modulo-pesquisa.php';
		?>
	</div>

	<?php 
		get_sidebar();

		get_footer();
	?>
