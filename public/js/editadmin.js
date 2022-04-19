$(function () {
        
    $('#select-pais').on('change', onSelectPaisChange);

}); 

function onSelectPaisChange()
{
var pais_id = $(this).val();


if (! pais_id){
    $('#select-ciudad').html('<option value="">Seleccione una Ciudad</option>');
    return;
}

$.get('/api/editarAdmin/'+pais_id+'/ciudad', function (data) {
    var html_select = '<option value="">Seleccione una Ciudad</option>';
    for (var i=0; i<data.length; i++)
        html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
    $('#select-ciudad').html(html_select);

});
}