$(function () {
        
    $('#select-tipo_herra').on('change', onSelectTipo_HerraChange);

}); 

function onSelectTipo_HerraChange()
{
var tipo_herra_id = $(this).val();


if (! tipo_herra_id){
    $('#select-nom_herra').html('<option value="">Seleccione una Herramienta</option>');
    return;
}

$.get('/api/estrategia/'+tipo_herra_id+'/nom_herra', function (data) {
    var html_select = '<option value="">Seleccione una Herramienta</option>';
    for (var i=0; i<data.length; i++)
        html_select += '<option value="'+data[i].nombre+'">'+data[i].nombre+'</option>'
    $('#select-nom_herra').html(html_select);
    $('#select-nom_herra').on('change', onSelectTipo_NomHerraChange);
});
}