jQuery("#curso").change(function() {
    
    var curso_selected = jQuery('#curso option:selected').data('url');
    //alert(curso_selected);
    jQuery('#search').attr('href', curso_selected);
});