jQuery("#cidade").change(function() {

    var ajax_url = jQuery('#meeting_search_form').attr('data-ajaxurl');
    var parent_city = jQuery(this).val();

    //clear options
    jQuery('#curso').html('');
    //reset the initial option
    jQuery('#curso').append('<option>Selecione um curso ...</option>'); 
    jQuery.ajax({
        type: 'POST',
        url: ajax_url,
        data: {
            action: 'get_curso',
            parent_city: parent_city
        },
        dataType: 'json',
        success: function(data, textStatus, XMLHttpRequest){
            //append results
            if(data){
                jQuery.each(data, function(i,v) {   
                    //console.log(data);
                    jQuery('#curso')
                        .removeAttr('disabled')
                        .append(jQuery('<option>', { 'value' : v.name, 'data-url' : v.link })
                        .text(v.name)); 
                });
            }
        },
        error: function(MLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
        }
    });
});
