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
	'descricao_curso'		=> 'descricao_curso',
	'imagem_det_1' 			=> 'imagem_detalhe_1_curso',
	'titulo_det_1' 			=> 'titulo_detalhe_1_curso',
	'descricao_det_1' 		=> 'descricao_detalhe_1-curso',
	'imagem_det_2' 			=> 'imagem_detalhe_2_curso',
	'titulo_det_2' 			=> 'titulo_detalhe_2_curso',
	'descricao_det_2' 		=> 'descricao_detalhe_2-curso',
	'imagem_det_3' 			=> 'imagem_detalhe_3_curso',
	'titulo_det_3' 			=> 'titulo_detalhe_3_curso',
	'descricao_det_3' 		=> 'descricao_detalhe_3-curso',
	'titulo_info_1' 		=> 'titulo_info_1',
	'titulo_info_2' 		=> 'titulo_info_2',
	'titulo_info_3' 		=> 'titulo_info_3',
	'titulo_info_4' 		=> 'titulo_info_4',
	'titulo_info_5' 		=> 'titulo_info_5',
	'conteudo_info_1' 		=> 'conteudo_info_1',
	'conteudo_info_2' 		=> 'conteudo_info_2',
	'conteudo_info_3' 		=> 'conteudo_info_3',
	'conteudo_info_4' 		=> 'conteudo_info_4',
	'conteudo_info_5' 		=> 'conteudo_info_5'
);

$imagem_curso 			= get_field( $curso_fields['imagem_curso'] );
$nome_curso 			= get_field( $curso_fields['nome_curso'] );
$investimento_curso 	= get_field( $curso_fields['investimento_curso'] );
$modalidade_curso 		= get_field( $curso_fields['modalidade_curso'] );
$duracao_curso 			= get_field( $curso_fields['duracao_curso'] );
$descricao_curso 		= get_field( $curso_fields['descricao_curso'] );

$imagem_det_1 			= get_field( $curso_fields['imagem_det_1']);
$titulo_det_1 			= get_field( $curso_fields['titulo_det_1']);
$descricao_det_1 		= get_field( $curso_fields['descricao_det_1']);

$imagem_det_2 			= get_field( $curso_fields['imagem_det_2']);
$titulo_det_2 			= get_field( $curso_fields['titulo_det_2']);
$descricao_det_2 		= get_field( $curso_fields['descricao_det_2']);

$imagem_det_3 			= get_field( $curso_fields['imagem_det_3']);
$titulo_det_3 			= get_field( $curso_fields['titulo_det_3']);
$descricao_det_3 		= get_field( $curso_fields['descricao_det_3'] );

$titulo_info_1 			= get_field( $curso_fields['titulo_info_1'] );
$titulo_info_2 			= get_field( $curso_fields['titulo_info_2'] );
$titulo_info_3 			= get_field( $curso_fields['titulo_info_3'] );
$titulo_info_4 			= get_field( $curso_fields['titulo_info_4'] );
$titulo_info_5 			= get_field( $curso_fields['titulo_info_5'] );

$conteudo_info_1 		= get_field( $curso_fields['conteudo_info_1'] );
$conteudo_info_2 		= get_field( $curso_fields['conteudo_info_2'] );
$conteudo_info_3 		= get_field( $curso_fields['conteudo_info_3'] );
$conteudo_info_4 		= get_field( $curso_fields['conteudo_info_4'] );
$conteudo_info_5 		= get_field( $curso_fields['conteudo_info_5'] );



// $locations = get_field('relacao-curso-polo');

// $fields = get_the_ID($locations->ID);

// var_dump($locations, $fields);

// $args = array(
// 	 'category'  => '9',
// 	    'tax_query'             => array(
// 	       array(
// 	          'taxonomy'        => 'taxonomy',
// 	          'field'           => 'term_id',
// 	          'hide_empty'      => false
// 	       )
// 	    )
// 	 );

// die();



custom_breadcrumbs();
?>
	<div class="curso">
		<article <?php post_class('descricao-curso'); ?>>
			<div class="grid-curso">
				<div class="descricao grid-md">
					<div class="imagem">
						<img src="<?php echo $imagem_curso['url']; ?>" alt="<?php echo $imagem_curso['alt']; ?>" />
					</div>
					<div class="texto">
						<h2><?php echo $nome_curso; ?></h2>

						<p class="infos">
							INVESTIMENTO: R$<?php echo $investimento_curso; ?> <br/>
							MODALIDADE: <?php echo $modalidade_curso; ?> <br/>
							DURAÇÃO: <?php echo $duracao_curso; ?> <br/>
						</p>

						<p><?php echo $descricao_curso; ?></p>
					</div>
				</div>
			</div>
		</article>
		<article id="post-<?php the_ID(); ?>" <?php post_class('itens detalhes-curso'); ?>>
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
								<?php echo  $descricao_det_1; ?>
							</p>
						</div>
					</div>
					<div class="right">
						<div class="icone-detalhes">
							<img src="<?php echo $imagem_det_2['url']; ?>" alt="<?php echo $imagem_det_2['alt']; ?>" />
						</div>
						<div class="texto-detalhes">
							<strong><?php echo  $titulo_det_2; ?></strong>
							<p>
								<?php echo  $descricao_det_2; ?>
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
								<?php echo  $descricao_det_3; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article <?php post_class('sobre-curso'); ?>>
			<div class="grid-curso">
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
										<a class="collapsed" data-toggle="collapse" data-parent="#custom-collapse-0" href="#item3" aria-expanded="false">
											<?php echo $titulo_info_3; ?>
										</a>
									</h4>
								</div>
								<div id="item3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p><?php echo $conteudo_info_3; ?></p>
									</div>
								</div>
							</div>
						<?php }
						if ($titulo_info_4 !== '') {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#custom-collapse-0" href="#item4" aria-expanded="false">
											<?php echo $titulo_info_4; ?>
										</a>
									</h4>
								</div>
								<div id="item4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<div class="search-polo">
											<p>Busque por região:</p>
											<form method="GET" action="" class="meeting_search_interna" id="meeting_search_interna" data-ajaxurl="<?php echo home_url(); ?>/wp-admin/admin-ajax.php">
												<fieldset>
													<div class="uf">
														<?php parent_locations_select_curso(); ?>
													</div>
													<div class="cidade">
														<select name="cidade_interna" id="cidade_interna" disabled="disabled">
															<option value="selecione">Selecione uma cidade ...</option>
														</select>
													</div>
												</fieldset>
											</form>
											<div id="lista-polos">
								
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php }
						if ($titulo_info_5 !== '') {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#custom-collapse-0" href="#item5" aria-expanded="false">
											<?php echo $titulo_info_5; ?>
										</a>
									</h4>
								</div>
								<div id="item5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p><?php echo $conteudo_info_5; ?></p>
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
