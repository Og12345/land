(function($){
	$(document).ready(function(){
		// select estado/cidade
		$('.wpcf7-form').find('select[name="uf"]').on("change",function(){
			var uf = $(this).val(); // UF selecionado ***
			var select_cidade = $('.wpcf7-form').find('select[name="cidade"]'); // Select de cidades ***
			if(uf == "")
				return false;

			// Limpa o select de cidade
			select_cidade.empty();
			select_cidade.append("<option value=''> cidade* </option>");
			// ***

			var json = "";
			$.ajax({
				method:'GET',
				url:ajaxurl,
				data:{
					action:'require_url'
				}
			}).done(function(data){
				var dados = JSON.parse(data);
				json = dados.json;
				$.getJSON(json,function(data){
					var counter = data.estados.length;
					var i = 1;
					var check = false;
					// Loop para procurar o uf no json!
					for(i=1;i<=counter;i++){
						if(check == false){
							var index = i - 1;
							if(data.estados[index].sigla == uf){
								console.log(data.estados[index].sigla);
								// Aplica todas as cidades!
								$.each(data.estados[index].cidades,function(key,value){
									select_cidade.append("<option value='"+value+"'>"+value+"</option>");
								});
								check = true; // Variavel usada para controlar o loop!
							}
						}
					}
				});
			});
		});
		// ***

		// Página Cursos
		var placement = $(".busca-curso-placement");
		if(placement.length > 0){
			$('.site-content').css({
				'background':'#dfe1e2'
			});
			$('.scroll-to-top').remove();
		}
		// ***

		// Controle de size
		var new_height = $(window).height() - 160 // 160 pois desconta o tamanho do menu e mais um pouco!
		$('.box-video').css({
			'height': new_height
		});
		$('.box-footer').children().css({
			'height': new_height + 100
		});
		// ***

		//Todos os controles de páginas

		/* ### Botão da página de curso ### */
		$('#page-home').on('click',function(){
			var url = window.location.host;
			window.location.assign(url);
		});

		var body = $('body,html'); //config ---

		// Botão para o box do video ---
		$('#to-video').on('click',function(){
			var path = $('.box-video');
			var calc = path.offset().top - 150;
			body.animate({scrollTop:calc},1000);
		});
		// ---

		$('#to-footer').on('click',function(){
			var path = $('.box-footer');
			var calc = path.offset().top - 50;
			body.animate({scrollTop:calc},1000);
		});

		$('#to-home').on('click',function(){
			var path = $('.box-footer');
			var calc = 0;
			body.animate({scrollTop:calc},1000);
		});

		/* ### */


		// ***
	});
})(jQuery);
