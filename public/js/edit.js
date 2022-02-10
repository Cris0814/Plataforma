$(function () {
        
        $('#select-institucion').on('change', onSelectInstitucionChange);

    }); 

function onSelectInstitucionChange()
{
    var institucion_id = $(this).val();
    

    if (! institucion_id){
        $('#select-programa').html('<option value="">Seleccione Programa</option>');
        return;
    }

    $.get('/api/editarUser/'+institucion_id+'/programa', function (data) {
        var html_select = '<option value="">Seleccione Programa</option>';
        for (var i=0; i<data.length; i++)
            html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
        $('#select-programa').html(html_select);

    });
}