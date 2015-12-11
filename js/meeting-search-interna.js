jQuery("#uf_interna").change(function() {

    var ajax_url = jQuery('#meeting_search_interna').attr('data-ajaxurl');
    var city_interna = jQuery(this).val();

    //clear options
    jQuery('#cidade_interna').html('');
    //reset the initial option
    jQuery('#cidade_interna').append('<option>Selecione uma cidade ...</option>'); 

    jQuery.ajax({
        type: 'POST',
        url: ajax_url,
        data: {
            action: 'get_cidade_interna',
            city_interna: city_interna
        },
        dataType: 'json',
        success: function(data, textStatus, XMLHttpRequest){
            //append results
            if(data){
                console.log(data);
                jQuery.each(data, function(i,v) {   
                    //console.log(data);
                    jQuery('#cidade_interna')
                        .removeAttr('disabled')
                        .append(jQuery('<option>', { 'value' : v.term_id})
                        .text(v.child_name)); 
                });
            }
        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
        }
    });
});
