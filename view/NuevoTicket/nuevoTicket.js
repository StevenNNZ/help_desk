// Se ejecuta este código cuando se haya cargado completamente nuestra página
$(document).ready(function() {
    $('#ticket_descrip').summernote({height:'200'});

    // Se llama el controlador categoría y se envia un elemento llamado "op" con el valor de "combo", este elemento lo recibo el controlador y hace lo que le corresponde. 
    $.post("../../controller/categoria.php?op=combo",function(data, status){
        // A la etiqueta con id='cata_id' se le envía un contenido. Este contenido viene desde el controlador 'categoria', y se recupera con la palabra 'data'
        $('#cata_id').html(data);
    });
});

