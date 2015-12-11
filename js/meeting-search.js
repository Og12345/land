jQuery("#uf").change(function() {
    
    var ajax_url = jQuery('#meeting_search_form').attr('data-ajaxurl');
    var parent_location = jQuery(this).val();

    //clear options
    jQuery('#cidade').html('');
    //reset the initial option
    jQuery('#cidade').append('<option>Selecione uma cidade ...</option>'); 
    jQuery.ajax({
        type: 'POST',
        url: ajax_url,
        data: {
            action: 'get_childlocations',
            parent_location: parent_location
        },
        dataType: 'json',
        success: function(data, textStatus, XMLHttpRequest){
            //append results
            if(data){
                jQuery.each(data, function(i,v) {   
                    //console.log(data);
                    jQuery('#cidade')
                        .removeAttr('disabled')
                        .append(jQuery('<option>')
                        .val(v.term_id)
                        .text(v.child_name)); 
                });
            }
        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
        }
    });
});