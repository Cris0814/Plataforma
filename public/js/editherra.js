$(function () {
        
    $('#select-tipo_herra').on('change', onSelectTipo_HerrasChange);

}); 

function onSelectTipo_HerrasChange()
{
var tipo_herra_id = $(this).val();


if (! tipo_herra_id){
    $('#select-herra').html('<option value="">Seleccione una Herramienta</option>');
    return;
}

$.get('/api/editarEstrategia/'+tipo_herra_id+'/herra', function (data) {
    var html_select = '<option value="">Seleccione una Herramienta</option>';
    for (var i=0; i<data.length; i++)
        html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
    $('#select-herra').html(html_select);

});
}