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
	});
})(jQuery);