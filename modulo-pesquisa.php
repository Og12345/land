<article id="pesquisa" class"">
	<div class="grid-curso">
		<div class="grid-md">
			<div class="title-search">
				<h3>Ache <span>seu Polo.</span></h3>
				<a href="javascript:void" class="window-help"><i class="help"></i></a>
				<div class="balao">
					<p>
						<strong>
							Porque estamos pedindo UF e cidade? <br/>
						</strong>
						O curso é realizado totalmente a distância e você conta com apoio de tutores para 
						auxiliarem durante o percurso de seu curso. Além disso, as avaliações são realizadas 
						no Polo de Educação a distância. Por isto é importante sabermos qual região procura.
					</p>
				</div>
			</div>
			<div class="search-form">
				<form method="GET" action="" class="meeting_search_form" id="meeting_search_form" data-ajaxurl="<?php echo home_url(); ?>/wp-admin/admin-ajax.php">
					<fieldset>
						<div class="select-area">
								<?php parent_locations_select(); ?>  
						</div>
						<div class="select-area">
							<select name="cidade" id="cidade" disabled="disabled">
								<option value="selecione">Selecione uma cidade ...</option>
							</select>
						</div>
						<div>
							<select name="curso" id="curso" disabled="disabled">
								<option>Selecione um curso ...</option>
							</select>
						</div> 
						<div class="submit-area">
							<a href="javascript:void" id="search" class="btn btn-default">Buscar</a>
						</div>
					</fieldset>
				</form>
				<?php //echo do_shortcode('[searchandfilter fields="taxonomy" hierarchical="1" show_count="1" submit_label="Buscar"]'); ?>
			</div>
		</div>
	</div>
</article>