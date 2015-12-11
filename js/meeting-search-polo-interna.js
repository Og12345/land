jQuery("#cidade_interna").change(function() {

    var ajax_url = jQuery('#meeting_search_interna').attr('data-ajaxurl');
    var child_city = jQuery(this).val();

    //clear options
    // jQuery('#lista-polos').html('');
    // //reset the initial option
    // jQuery('#lista-polos').append('<p>'); 
    jQuery.ajax({
        type: 'POST',
        url: ajax_url,
        data: {
            action: 'get_polo',
            child_city: child_city
        },
        dataType: 'json',
        success: function(data, textStatus, XMLHttpRequest){
            //append results
            if(data){
                jQuery.each(data, function(i,v) {   
                    console.log(data);
                    jQuery('#lista-polos')
                    .append('<div class="informacao-polo">' +
                            '<p class="nome_polo">'+v.name+'</p>' +
                            '<p class="endereco_polo">'+v.endereco+'</p>' +
                            '<p class="telefone_polo">'+v.telefone+'</p>' +
                            '<a href="'+v.linkpolo+'" class="link-polo">Sobre o polo</a>' +
                            '<a href="javascript:void" class="open-mapa">Ver mapa</a>' +
                            '<a href="javascript:void" class="mapa-clone hidden">Ver mapa</a>' +
                            '<div class="acf-map hidden">' +
                                '<div class="marker" data-lat='+v.mapalat+' data-lng='+v.mapalng+' itemprop="map"></div>' +
                            '</div>' +
                        '</div>'
                    );
                });
            }
        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            console.log(errorThrown);
        }
    });
});
