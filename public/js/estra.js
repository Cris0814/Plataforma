$(function () {
        
    $('#select-tipo_estra').on('change', onSelectTipo_EstraChange);

}); 

function onSelectTipo_EstraChange()
{
var tipo_estra_id = $(this).val();


if (! tipo_estra_id){
    $('#select-nom_estra').html('<option value="">Seleccione una Estrategia</option>');
    return;
}

$.get('/api/estrategia/'+tipo_estra_id+'/nom_estra', function (data) {
    var html_select = '<option value="">Seleccione una Estrategia</option>';
    for (var i=0; i<data.length; i++)
        html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
    $('#select-nom_estra').html(html_select);

});
}